
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Todolist</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./library/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="./library/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./library/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="./library/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./library/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="./library/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./library/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="./library/plugins/summernote/summernote-bs4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="./library/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="./library/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css"/>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="./library/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="./library/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="./library/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <img src="./library/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./library/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
   
    <section class="content">
      <div class="container-fluid">
        <?= @$content ?>

        <?php
          if (isset($_SESSION["success"])) {
        ?>
            <span id="systemSuccess" style="display: none"><?=$_SESSION["success"]?></span>
        <?php
            session_destroy();
          }

          if(isset($_SESSION["error"])) {
        ?>
            <span id="systemError" style="display: none"><?=$_SESSION["error"]?></span>
        <?php 
            session_destroy();
          }
      ?>
      </div>

      <div class="modal fade" id="modal-add-work">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Work</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/add" method="POST">
            <div class="modal-body">
               
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="workName">WorkName</label>
                        <input type="text" id="workName" class="form-control" name="workName">
                      </div>
                      <div class="form-group">
                        <label for="workName">Start Date</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input type="text" id="startDate" class="form-control" name="startDate">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="workName">End Date</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                            <input type="text" id="endDate" class="form-control" name="endDate">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="workName"></label>
                        <select name="status" id="status" class="form-control">
                          <option value="PLANNING">PLANNING</option>
                          <option value="DOING">DOING</option>
                          <option value="COMPLETE">COMPLETE</option>
                        </select>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal-update-work">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Work</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/update" method="POST">
            <div class="modal-body">
               
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <input type="hidden" id="workId" name="id">
                        <label for="workName">WorkName</label>
                        <input type="text" id="workNameUpdate" class="form-control" name="workName">
                      </div>
                      <div class="form-group">
                        <label for="workName">Start Date</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input type="text" id="startDateUpdate" class="form-control" name="startDate">
                        </div>  
                      </div>
                      <div class="form-group">
                        <label for="workName">End Date</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input type="text" id="endDateUpdate" class="form-control" name="endDate">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="workName"></label>
                        <select name="status" id="statusUpdate" class="form-control">
                          <option value="PLANNING">PLANNING</option>
                          <option value="DOING">DOING</option>
                          <option value="COMPLETE">COMPLETE</option>
                        </select>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="./library/plugins/jquery/jquery.min.js"></script>
<script src="./library/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="./library/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./library/plugins/chart.js/Chart.min.js"></script>
<script src="./library/plugins/sparklines/sparkline.js"></script>
<script src="./library/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="./library/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="./library/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="./library/plugins/moment/moment.min.js"></script>
<script src="./library/plugins/daterangepicker/daterangepicker.js"></script>
<script src="./library/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="./library/plugins/summernote/summernote-bs4.min.js"></script>
<script src="./library/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="./library/dist/js/adminlte.js"></script>
<script src="./library/dist/js/demo.js"></script>
<script src="./library/dist/js/pages/dashboard.js"></script>
<script src="./library/plugins/toastr/toastr.min.js"></script>
<script src="./library/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 1000
    });
  });

  $(function() {
    $('#startDateUpdate').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    });

    $('#endDateUpdate').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    }); 

    $('#startDate').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    });

    $('#endDate').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    }); 

  });

  window.onload = function() {
      const systemSuccess = $('#systemSuccess').text();
      const systemError = $('#systemError').text();

      if (systemError) {
        toastr.error(
          systemError,
          'message'
        );
      }

      if (systemSuccess) {
        toastr.success(
          systemSuccess,
          'message'
        );
      }
    }

  function addWork(){
    $('#modal-add-work').modal('show');
  }

  function update(e){

    var id = $(e).attr('data-id');
    var workName = $(e).attr('data-workName');
    var startDate = $(e).attr('data-startDate');
    var endDate = $(e).attr('data-endDate');
    var status = $(e).attr('data-status');

    $('#workId').val(id);
    $('#workNameUpdate').val(workName);
    $('#startDateUpdate').val(startDate);
    $('#endDateUpdate').val(endDate);
    $('#statusUpdate').val(status)

    $('#modal-update-work').modal('show');
  }
  

</script>
</body>
</html>
