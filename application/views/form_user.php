<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>css/style.css" />
  <link rel="shortcut icon" href="<?php echo base_url('assets/admin/');?>images/favicon.png" />
  <style type="text/css">
    .input-group-btn{
      align-items: normal;
    }
  </style>
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="<?php echo site_url('admin');?>"><img src="<?php echo base_url('assets/admin/');?>images/logo_star_black.png" /></a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo site_url('admin');?>"><img src="<?php echo base_url('assets/admin/');?>images/logo_star_mini.jpg" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="<?php echo base_url('assets/admin/');?>images/face.jpg" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-th"></i></a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="<?php echo base_url('assets/admin/');?>images/face.jpg" alt="">
            <p class="name"><?php echo $this->session->userdata('fullname'); ?></p>
            <p class="designation">Manager</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin');?>">
                <img src="<?php echo base_url('assets/admin/');?>images/icons/1.png" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/table_reservation');?>">
                <img src="<?php echo base_url('assets/admin/');?>images/icons/8.png" alt="">
                <span class="menu-title">Reservation</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('admin/table_user');?>">
                <img src="<?php echo base_url('assets/admin/');?>images/icons/5.png" alt="">
                <span class="menu-title">User</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/table_transportation');?>">
                <img src="<?php echo base_url('assets/admin/');?>images/icons/6.png" alt="">
                <span class="menu-title">Transportation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/table_rute');?>">
                <img src="<?php echo base_url('assets/admin/');?>images/icons/7.png" alt="">
                <span class="menu-title">Rute</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/table_customer');?>">
                <img src="<?php echo base_url('assets/admin/');?>images/icons/8.png" alt="">
                <span class="menu-title">Customer</span>
              </a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('login/logout');?>">
                <img src="<?php echo base_url('assets/admin/');?>images/icons/10.png" alt="">
                <span class="menu-title">Log out</span>
              </a>
            </li>
          </ul>
        </nav>

        <!-- partial -->
        <div class="content-wrapper">
          <h3 class="page-heading mb-4">Forms</h3>
          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Add user</h5>
                  <?php if ($user != 0) {
                      foreach ($user as $u ) { 
                        $id       = $u->id;                  
                        $fullname = $u->fullname;
                        $username = $u->username;
                        $hexpassword = $u->password;
                        $password = $model->decrypt_data($hexpassword);
                        $level    = $u->level;
                      }
                    } else {
                        $id = null;
                        $fullname = null;
                        $username = null;
                        $password = null;
                        $level    = null;
                    }
                  ?>
                  <form class="forms-sample" action="<?php echo base_url();?>/index.php/crud/add_user" method='post'>
                    <div class="form-group">
                      <input type="hidden" class="form-control p-input" name="id" id="id" aria-describedby="idHelp" value="<?php echo $id?>">
                      <label for="username">Username</label>
                      <input type="text" class="form-control p-input" name="username" id="username" aria-describedby="usernameHelp" placeholder="Enter username" value="<?php echo $username?>">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <div class="input-group">
                        <input type="password" class="form-control p-input" name="password" id="password" placeholder="Password" value="<?php echo $password?>">
                        <span class="input-group-btn">
                          <button type="button" name="show" class="btn btn-secondary">
                            <i class="fa fa-eye"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="fullname">Fullname</label>
                      <input type="text" class="form-control p-input" name="fullname" id="fullname" aria-describedby="fullnameHelp" placeholder="Enter Fullname" value="<?php echo $fullname?>">
                    </div>
                    <div class="form-group">
                      <label for="level">Level</label>
                      <select class="form-control" id="level" name="level">
                          <option selected="selected" value=''>-- Select Level --</option>
                          <option <?php if($level == 'admin') echo "selected='selected'"?> value='admin'>Admin</option>
                          <option <?php if($level == 'manager') echo "selected='selected'"?> value='manager'>Manager</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:../../partials/_footer.html -->

        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Star Admin</a> &copy; 2017
            </span>
          </div>
        </footer>


        <!-- partial -->
      </div>
    </div>

  </div>

  <script src="<?php echo base_url('assets/admin/');?>node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>js/off-canvas.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>js/misc.js"></script>

  <!-- Script -->
  <script type="text/javascript">

    // Show password in Form User
    $("button[name=show]").click(function() {
      var show = $("input[name=password]");
      show.attr("type") === "password" ? show.attr("type","text") : show.attr("type","password");
    });
  </script>

</body>

</html>
