<?php 
session_start();
include_once('../../config/database.php');
if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
    case 'them':
        $masv=$_GET['masv'];
        $ten=$_GET['ten'];
        $ns=$_GET['ns'];
        $gt=$_GET['gt'];
        $dc=$_GET['dc'];
        $sdt=$_GET['sdt'];
        $mk=$_GET['mk'];
        $sql="insert into sinhvien(MaSV,HoTen,NgaySinh,GioiTinh,DiaChi,SDT,MatKhau) value('$masv','$ten','$ns','$gt','$dc','$sdt','$mk')" ;
        $rs=mysqli_query($conn,$sql);
          if($rs){
                    header('location:../index.php?action=sinhvien&view=all&thongbao=them');
          }
        break;
		case 'capnhat':
  			$masv=$_GET['masv'];
        $ten=$_GET['ten'];
        $ns=$_GET['ns'];
        $gt=$_GET['gt'];
        $dc=$_GET['dc'];
        $sdt=$_GET['sdt'];
        $sql="update sinhvien set HoTen='$ten', NgaySinh='$ns',DiaChi='$dc',SDT='$sdt',GioiTinh='$gt' where MaSV='$masv'" ;
        $rs=mysqli_query($conn,$sql);
          if($rs){
          					header('location:../index.php?action=sinhvien&view=all&thongbao=sua');
          }
  			break;  
    case 'xoa':
        $masv=$_GET['masv'];
        $sql="delete from sinhvien where MaSV='$masv'";
        $rs=mysqli_query($conn,$sql);
        if($rs){

               header('location:../index.php?action=sinhvien&view=all&thongbao=xoa');
        }
      break;

		default:
			# code...
			break;
	}
}


?>