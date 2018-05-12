<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>
<body>

<nav class="bottom-navbar navbar navbar-inverse navbar-dark sss-black">
    <div class="container d-flex justify-content-center">
        <a class="navbar-brand mx-0" href="#"><img src="{{url('/images/kingday2.png')}}"></a>
    </div>
</nav>




<section id="path">
    <div aria-label="breadcrumb">
        <ol class="breadcrumb my-0 sss-gray rounded-0">
            <li><a href=""><i class="fas fa-chevron-circle-left mr-2 text-warning"></i></a></li>
            <li class="breadcrumb-item"><a href="{{url('index')}}" class="text-warning">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Admin</li>
        </ol>
    </div>
</section>

@yield('content')

<div id="foot-block">
    <footer class="footer">
        <div class="sss-black text-white">
            <div class="container py-3">
                <a href=""><img class="d-block img-fluid mx-auto" src="{{url('/images/kingday2.png')}}" ></a>
            </div>
        </div>
        <!-- <div class="end-footer container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-lg-4">
                  <a href="">Privacy Policy</a>
                </div>
                <div class="col-lg-4">
                  <a href="">Terms and Conditions</a>
                </div>
                <div class="col-lg-4">
                  <a href="">Help Center</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <p class="text-center text-dark text-muted">© Copyright 2018 Jiangsu Kingday - All rights reserved. </p>
            </div>
          </div>
        </div> -->
    </footer>

    <nav class="footer-nav navbar navbar-expand navbar-dark sss-gray">
        <!--       <a class="navbar-brand" href="#">Always expand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavbar" aria-controls="footerNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button> -->

        <div class="collapse navbar-collapse" id="footerNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Privacy Policy</a>
                </li>
                <li class="d-none d-lg-block">
                    <span class="divider-vertical"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Terms and Conditions</a>
                </li>
                <li class="d-none d-lg-block">
                    <span class="divider-vertical"></span>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-info-circle mr-1"></i>Help Center<span class="sr-only">(current)</span></a>
                </li>
            </ul>
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