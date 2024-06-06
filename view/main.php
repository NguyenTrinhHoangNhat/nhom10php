<h3 style="margin-left: 30px;"> Trang Ký Túc Xá - Đại Học Công Thương TP.HCM </h3>
<?php if (isset($_SESSION['sv_login'])) {
	$vs = $_SESSION['sv_login'];
	echo "<h4 style='margin-left:30px'>Thông tin sinh viên : " . $vs['HoTen'] . "</h4>";
} ?>