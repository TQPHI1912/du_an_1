<?php

session_start();
include('../../../admincp/config/connect.php');

if (isset($_POST['redirect'])) {

	$email = $_SESSION['email'];
	$sql_dh = "SELECT * FROM tbl_cart_detail ,tbl_sanpham  WHERE tbl_cart_detail.id_sanpham=tbl_sanpham.id_sanpham";
	//$sql = "SELECT * FROM tbl_giohang where email = '$email'";
	$id_khachhang = $_SESSION['id_khachhang'];
	$code_order = rand(0, 9999); // random tuwf 0 den 4 so
	$result = mysqli_query($connect, $sql_dh);
	$row = mysqli_fetch_assoc($result);
	//$code_order = $row['code_cart']; // random tuwf 0 den 4 so
	$tensanpham = $row['tensanpham'];
	$slmua = $row['soluongmua'];
	$img = $row['hinhanh'];
	$gia = $row['soluongmua'] * $row['giasanpham'];
	$cart_pay = $_POST['payment'];
	$insert_cart = "INSERT INTO tbl_giohang(email,code_cart,cart_status,cart_payment) VALUE('" . $email . "','" . $code_order . "',1,'" . $cart_pay . "')";
	$cart_query = mysqli_query($connect, $insert_cart);
	if ($cart_query) {
		print_r($_SESSION['cart']);
		//thêm giỏ hàng chi tiết
		foreach ($_SESSION['cart'] as $key => $value) {
			$id_sanpham = $value['id'];
			$soluong = $value['soluong'];
			$insert_order_details = "INSERT INTO tbl_cart_detail(id_sanpham,code_cart,soluongmua) VALUE('" . $id_sanpham . "','" . $code_order . "','" . $soluong . "')";
			mysqli_query($connect, $insert_order_details);
		}

		require("../../../PHPMailer/src/PHPMailer.php");
		require("../../../PHPMailer/src/SMTP.php");
		require("../../../PHPMailer/src/Exception.php");


		$mail = new PHPMailer\PHPMailer\PHPMailer();
		$mail->IsSMTP(); // enable SMTP

		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = "trongdatga@gmail.com";
		$mail->Password = "osmcptyhponvizni";
		$mail->SetFrom("trongdatga@gmail.com");
		$mail->Subject = "Thank you for your order!";
		$mail->Body = "<h2><i>Cảm ơn bạn đã đặt hàng ở chúng tôi!</i></h2> <h3>Tên sản phẩm:</h3> <b>$tensanpham</b> <h3>Giá:</h3><b>$gia</b>  <h3>Số lượng: </h3> <b>$slmua</b> <h3>Mô tả: </h3>";
		$mail->AddAddress("trongdatga@gmail.com");
		$mail->AddAddress("hoangnguyen5301@gmail.com");

		if (!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "Message has been sent";
		}

		$message = "Đặt hàng thành công";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header('Location:../../../index.php');
	}
}