<aside class="main-sidebar">
    <?php $hinh = ""; ?>
          <?php $name = ""; ?>
          <?php $data = $this->session->userdata('Employee'); ?>
                          <?php if ($data!=null): ?>
                              <?php foreach ($data as $key => $value): ?>
                                  <?php $hinh = $value["lastname"]; ?>
                                  <?php $name = $value["firstname"]; ?>
                              <?php endforeach ?>
                          <?php endif ?>

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>upload/imgUser/<?php echo $hinh; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="<?php echo base_url('admin/Home'); ?>">
            <i class="fa fa-dashboard"></i> <span>Trang Chủ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Biểu đồ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="<?php echo base_url('admin/Chart/ChartYear') ?>"><i class="fa fa-circle-o"></i> Thống kê doanh thu theo năm</a></li>
            <li><a href="<?php echo base_url('admin/Chart') ?>"><i class="fa fa-circle-o"></i> Thống kê doanh thu theo tháng</a></li>
            <li><a href="<?php echo base_url('admin/Chart') ?>"><i class="fa fa-circle-o"></i> Thống kê doanh thu theo tuần</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Đăng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/Post') ?>"><i class="fa fa-circle-o"></i> Đăng Sản Phẩm</a></li>
            <li><a href="<?php echo base_url('Admin/PostNews') ?>"><i class="fa fa-circle-o"></i> Đăng Tin Tức</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle-o"></i> <span>Quản Lý</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">

          <?php  if ( $data[0]['IdChucVu'] == "2") {?>

          
            <li><a href="<?php echo base_url('admin/MEmployee') ?>"><i class="fa fa-circle-o"></i> Quản Lý Nhân Viên</a></li>
            <?php }?>
            <li><a href="<?php echo base_url('admin/MUser') ?>"><i class="fa fa-circle-o"></i> Quản Lý Khách Hàng</a></li>
            <li><a href="<?php echo base_url('admin/MFilm/index') ?>"><i class="fa fa-circle-o"></i> Quản Lý Đăng Sản Phẩm</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Quản Lý Đăng Tin tức</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i> <span>Thống kê</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="<?php echo base_url('admin/Statistic_revenue') ?>"><i class="fa fa-circle-o"></i> Đơn hàng</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('admin') ?>/ConfirmOrder">
            <i class="fa fa-handshake-o"></i> <span>Xác nhận đơn hàng</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin') ?>/sendmail">
            <i class="fa fa-envelope"></i> <span>Gửi mail</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin') ?>/Chat">
            <i class="fa fa-commenting-o"></i> <span>Phòng Chat</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>