<header class="main-header">

    <?php $hinh = ""; ?>
    <?php $name = ""; ?>
    <?php $id = ""; ?>
          <?php $data = $this->session->userdata('Employee'); ?>
                          <?php if ($data!=null): ?>
                              <?php foreach ($data as $key => $value): ?>
                                  <?php $hinh = $value["lastname"]; ?>
                                  <?php $name = $value["firstname"]; ?>
                                  <?php $id = $value["id"]; ?>
                              <?php endforeach ?>
                          <?php endif ?>

    <!-- Logo -->
    <a href="<?php echo base_url('admin/home') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>9</b>Team</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Nine</b>team</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>upload/imgUser/<?php echo $hinh; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Lê Anh Việt</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>upload/imgUser/<?php echo $hinh; ?>" class="img-circle" alt="User Image">

                <p>
                  Lê Anh Việt - Web Developer
                  <small>Member since Nov. 2017</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="<?php echo base_url('Admin/Login') ?>/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>