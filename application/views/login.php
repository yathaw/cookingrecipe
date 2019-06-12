<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo base_url(); ?>"/>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Tasty Food </title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('template/backend/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('template/backend/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container mt-5">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9 mt-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <img src="<?= base_url('template/logo.png') ?>" class="img-fluid" style="width: 100px; height:100px">

                    <h1 class="h4 text-gray-900 mb-4 mt-5">Welcome Back!</h1>

                  </div>

                  <?php if(isset($error_message)): ?>
                  
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>FAIL!</strong> 
                      <?= $error_message ?>
    
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    <?php endif ?>


                  <form class="user" action="<?= base_url('check') ?>" method="POST">
                    
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                    </div>
                    
                    <button class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                    
                  </form>
                  <div class="text-center">
                    <a href="" class="small" href="">
                      Do you want to know admin login account?

                    </a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('template/backend/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('template/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('template/backend/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('template/backend/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>
