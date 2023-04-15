<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
	unset($_SESSION['dangnhap']);
	header('Location:login.php');
}
?>
<p class="header"><a href="index.php?dangxuat=1"><i class="fa-solid fa-arrow-left"></i><i class="fa-regular fa-user"></i>Đăng xuất</a></p>

<!-- <?php if (isset($_SESSION['dangnhap'])) {
			echo $_SESSION['dangnhap'];
		} ?> -->