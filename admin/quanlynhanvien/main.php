<?php
include_once('../config/database.php');
if ($_SESSION['nv_admin']['Quyen'] == 2) {
	return header('../index.php');
}

if (isset($_GET['view'])) {
	$view = $_GET['view'];
	switch ($view) {
		case 'all':
?>
			<!-- <h4>Quản Lý Nhân Viên </h4> -->
			<hr>
		<?php
			include_once('quanlynhanvien/them.php');
			include_once('quanlynhanvien/hoso.php');
			break;
		case 'sua':
		?>
			<!-- <h4>Quản Lý Phòng -> Cập nhập</h4> -->
			<hr>
<?php
			include_once('quanlynhanvien/sua.php');
			break;
		default:
			break;
	}
}
?>