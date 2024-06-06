 <div class="container">
     <div class="row">
         <div class="col-2" style="margin-left: -20px">
             <nav style="background-color: blueviolet; color: azure;" id="menu">
                 <ul>
                     <h4 style="margin-left: 20px;">Sinh Viên</h4>
                     <li><a style="color: white;" href="index.php?action=login">Đăng nhập</a></li>
                     <li><a style="color: white;" href="index.php?action=capnhapthongtin">Cập Nhập Thông Tin</a></li>
                     <li><a style="color: white;" href="index.php?action=dkphong">Đăng Ký Phòng</a></li>
                     <li><a style="color: white;" href="index.php?action=chuyenphong">ĐK Chuyển Phòng</a></li>
                     <li><a style="color: white;" href="index.php?action=traphong">Trả Phòng</a></li>
                     <li><a style="color: white;" href="index.php?action=phongdango">Xem Phòng Đang Ở</a></li>
                     <li><a style="color: white;" href="index.php?action=xemthongbao">Xem Thông Báo</a></li>
                     <li><a style="color: white;" href="./admin/login.php">Đăng nhập Admin</a></li>
                     <li><a style="color: white;" href="index.php?action=logout">Đăng Xuất</a></li>
                 </ul>
             </nav>
         </div>
         <div class="col-8 ">
             <?php include_once('include/content.php'); ?>
         </div>
     </div>