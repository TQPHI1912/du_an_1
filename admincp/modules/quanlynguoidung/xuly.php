<?php
include "../../config/connect.php";
$name = $_POST['hovatens'];
$account = $_POST['taikhoans'];
$email = $_POST['emails'];
$numberphone = $_POST['dienthoais'];
$address = $_POST['diachis'];
$chucvu = $_POST['chucvus'];

if (isset($_POST['suanguoidung'])) {
    $sql_sua_nd = "UPDATE tbl_dangky SET hovaten='" . $name . "',taikhoan='" . $account . "',email='" . $email . "',sodienthoai='" . $numberphone . "',diachi='" . $address . "',chucvu='" . $chucvu . "' WHERE email='$_GET[email]'";
    mysqli_query($connect, $sql_sua_nd);
    header('Location:../../index.php?action=quanlynguoidung&query=them');
} else {
    $id = $_GET['email'];
    $sql_xoa_nd = "DELETE FROM tbl_dangky WHERE email ='" . $id . "';";
    mysqli_query($connect, $sql_xoa_nd);
    header('Location:../../index.php?action=quanlynguoidung&query=them');
}