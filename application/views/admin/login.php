<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Food Blog - Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>admin_asset/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>admin_asset/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url();?>admin_asset/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>admin_asset/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url();?>img/burger.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?php echo base_url();?>admin_asset/images/logo-dark.svg" alt="logo">
              </div>
              
              <?php
                $exception = $this->session->userdata('exception');
                if(isset($exception))
                { 
              ?>
                  <div class="alert alert-danger">
                    <?php echo $exception; ?>
                  </div>
              <?php
                  $this->session->unset_userdata('exception');
                }
              ?>

              <?php
                $message = $this->session->userdata('message');
                if(isset($message))
                { 
              ?>
                  <div class="alert alert-success">
                    <?php echo $message; ?>
                  </div>
              <?php
                  $this->session->unset_userdata('message');
                }
              ?>
              
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="<?php echo base_url()?>admin_login/check_login" method="POST">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="admin_email" id="admin_email" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="admin_password" id="admin_password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i> Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="<?php echo base_url();?>admin_asset/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>admin_asset/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>admin_asset/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url();?>admin_asset/js/template.js"></script>
  <!-- endinject -->
</body>

</html>
