<?php
include_once('../config/database.php');
if (isset($_GET['view'])) {
	$view = $_GET['view'];
	switch ($view) {
		case 'quanlychuyenphong':
?>
			<hr> <?php
					include_once('quanlychuyenphong/danhsachdangky.php');
					break;
				case 'chitietdangky':
					?>
			<hr> <?php
					include_once('quanlychuyenphong/chitietdangky.php');
					break;
				default:

					break;
			}
		} else {
			include_once('dondathang/dondathang.php');
		}


					?>