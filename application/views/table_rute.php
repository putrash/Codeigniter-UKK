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
    a , a:hover{
      color:white;
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
            <li class="nav-item">
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
            <li class="nav-item active">
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
          <h3 class="page-heading mb-4">Tables Rute</h3>
          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-title mb-4">
                    <h5>Tambah Data 
                      <button type="button" class="btn btn-primary btn-sm">
                        <?php echo anchor('admin/form_rute/','Add');?>
                      </button> 
                    </h5>
                  </div>
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
                      <thead>
                        <tr class="text-primary">
                          <th>No</th>
                          <th>ID Pesawat</th>
                          <th>Depart from</th>
                          <th>Depart to</th>
                          <th>Depart at</th>
                          <th>Transit to</th>
                          <th>Transit Arrived</th>
                          <th>Arrived</th>
                          <th>Price</th>
                          <th></th>
                          <th></th> 
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $no = 1;
                          foreach($rute as $r) {  
                        ?>
                        <tr class="">
                          <td><?php echo $no++ ?></td> 
                          <td><?php echo $r->transportation_id ?></td>
                          <td><?php echo $r->rute_from ?></td>
                          <td><?php echo $r->rute_to ?></td>
                          <td><?php echo $r->depart_at ?></td>
                          <td><?php echo $r->transit_to ?></td>
                          <td><?php echo $r->transit_arrived ?></td>
                          <td><?php echo $r->arrived ?></td>
                          <td><?php echo $r->price ?></td>
                          <td>
                            <button type="button" class="btn btn-primary btn-sm" >
                              <?php echo anchor('admin/edit_form_rute/'.$r->id,'Manage');?>
                            </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger btn-sm" >
                              <?php echo anchor('crud/delete_rute/'.$r->id,'Remove');?>
                            </button>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
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
  <script src="<?php echo base_url('assets/admin/');?>node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>js/off-canvas.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>js/misc.js"></script>
</body>

</html>
