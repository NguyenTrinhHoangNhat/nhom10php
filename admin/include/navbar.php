<div class="col-2" style="margin-left: -25px; margin-top: -20px;margin-right: 10px;">
  <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
      <div class="sidebar-brand-icon rotate-n-15">
      </div>
      <div class="sidebar-brand-text mx-3"> Trang Admin </div>
    </a>
    <!-- Nav Item - Dashboard -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Quản Lý
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sanpham" aria-expanded="true" aria-controls="sanpham">

        <span>Quản Lý Đăng Ký Phòng</span>
      </a>
      <div id="sanpham" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <!-- <h6 class="collapse-header">Quản Lý Sản Phẩm</h6>-->
          <a class="collapse-item" href="index.php?action=quanlydangkyphong&view=quanlydangkyphong">Xử Lý Đăng Ký</a>
          <a class="collapse-item" href="index.php?action=quanlydangkyphong&view=danhsachall">Danh sách đã xử lý</a>

        </div>

      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#danhmuc" aria-expanded="true" aria-controls="danhmuc">
        <span>Quản Lý Chuyển Phòng</span>
      </a>
      <div id="danhmuc" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="index.php?action=quanlychuyenphong&view=quanlychuyenphong">Xử Lý Đ/K Chuyển Phòng</a>

        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#danhmuc1" aria-expanded="true" aria-controls="danhmuc1">
        <span>Quản Lý Trả Phòng</span>
      </a>
      <div id="danhmuc1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="index.php?action=quanlytraphong&view=quanlytraphong">Xử Lý Đ/K Trả Phòng</a>

        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hoadon" aria-expanded="true" aria-controls="hoadon">
        <span>Quản Lý Tiền Điện Nước</span>
      </a>
      <div id="hoadon" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="index.php?action=quanlydiennuoc&view=quanlydiennuoc">Thêm tiền điện nước</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#phong" aria-expanded="true" aria-controls="phong">
        <span>Quản Lý Phòng</span>
      </a>
      <div id="phong" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="index.php?action=quanlyphong&view=quanlyphong">Phòng</a>

        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#khu" aria-expanded="true" aria-controls="khu">
        <span>Quản Lý Khu</span>
      </a>
      <div id="khu" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="index.php?action=khu&view=khu">Khu</a>

        </div>
      </div>
    </li>
    </li>
    <li class="nav-item" style=" <?php if ($_SESSION['nv_admin']['Quyen'] == '2') echo 'display:none'  ?> ">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#nv" aria-expanded="true" aria-controls="nv">
        <span>Quản Lý Nhân Viên</span>
      </a>
      <div id="nv" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="index.php?action=nhanvien&view=all">Tất cả nhân viên</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sv" aria-expanded="true" aria-controls="sv">
        <span>Quản Lý Sinh Viên</span>
      </a>
      <div id="sv" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="index.php?action=sinhvien&view=all">Tất cả sinh viên</a>
        </div>
      </div>
    </li>
    <li>
      <a style="font-size: 1.4rem;" class="dropdown-item" href="logout.php">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a>
    </li>

    <!--   End Nav Item - Pages Collapse Menu 
               <hr class="sidebar-divider">
         <li class="nav-item">
              <a class="nav-link" href="index.php?action=sanpham">
                 >
                  <span>Sản Phẩm</span>
              </a>
            </li>
             Nav Item - Tables -->

    <!-- Nav Item - Tables 
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=danhthu">
                 
                  <span>Danh Thu</span>
              </a>
            </li>
  
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=xldh">
                 
                  <span>Xử lý đơn hàng</span>
              </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                 
                  <span>Shipper</span>
              </a>
            </li>
             
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                 
                  <span>  </span>
              </a>
            </li>
             Nav Item - Tables -->
  </ul>
</div>