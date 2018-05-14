<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
  <link href='css/bootstrap.css' rel='stylesheet'>
  <link href='css/ssstyle.css' rel='stylesheet'>
  <link href="css/fontawesome/fontawesome-all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>
<body>


  <nav class="bottom-navbar navbar navbar-inverse navbar-dark sss-black">
    <div class="container d-flex justify-content-center">
      <a class="navbar-brand mx-0" href="#"><img src="img/kingday2.png"></a>
    </div>
  </nav>




<section id="path">
  <div aria-label="breadcrumb">
    <ol class="breadcrumb my-0 sss-gray rounded-0">
      <li><a href=""><i class="fas fa-chevron-circle-right mr-2 text-warning"></i></a></li>
<!--       <li class="breadcrumb-item"><a href="#" class="text-warning">Home</a></li>
      <li class="breadcrumb-item"><a href="#" class="text-warning">Library</a></li> -->
      <li class="breadcrumb-item active" aria-current="page">Login</li>
    </ol>
  </div>
</section>








<section id="middlePage" class="bg-white my-5">
  <div class="secLogin container d-flex align-items-center">


        <!-- https://www.codeply.com/go/nhbdi2FkJm/bootstrap-4-login-form -->
        <div class="container py-5">
          <div class="row">
              <div class="col-md-12">
           <!--        <h2 class="text-center text-dark mb-4">Login Form</h2> -->
                  <div class="row">
                      <div class="col-md-6 mx-auto">

                          <!-- form card login -->
                          <div class="card rounded-0">
                              <div class="card-header border-bottom-0 d-flex justify-content-center">
                                  <h2 class="mb-0 font-weight-bold">Login</h2>
                              </div>
                              <div class="card-header border-top-0 d-flex justify-content-center">
                                  <p class="mb-0 text-uppercase">Please Log In to use this website</p>
                              </div>
                              <div class="card-body">
                                  <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                      <div class="form-group">
                                          <label for="uname1">Username</label>
                                          <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">
                                          <div class="invalid-feedback">Oops, you missed this one.</div>
                                      </div>
                                      <div class="form-group">
                                          <label>Password</label>
                                          <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
                                          <div class="invalid-feedback">Enter your password too!</div>
                                      </div>
                                      <div>
                                          <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description small text-dark">Remember me on this computer</span>
                                          </label>
                                      </div>
                                      <button type="submit" class="btn btn-warning btn-lg float-right rounded-0" id="btnLogin">Login</button>
                                  </form>
                              </div>
                              <!--/card-block-->
                          </div>
                          <!-- /form card login -->

                      </div>


                  </div>
                  <!--/row-->

              </div>
              <!--/col-->
          </div>
          <!--/row-->
      </div>
      <!--/container-->

  </div>
</section>











<div id="foot-block">
  <footer class="footer">
    <div class="sss-black text-white">
      <div class="container">
      </div>
    </div>
  </footer>

  <nav class="footer-nav navbar navbar-dark sss-gray">
    <div class="collapse navbar-collapse d-flex justify-content-center" id="footerNavbar">
      <p class="text-center text-secondary text-muted my-0">Copyright: 2018 Jiangsu Kingday Textile Co. Ltd</p>
    </div>
  </nav>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<!-- <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script> -->
<!-- <script src="js/popper.min.js"></script> -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->


</body>
</html>