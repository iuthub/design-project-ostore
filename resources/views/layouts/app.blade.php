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

<div class="top-navbar navbar navbar-inverse navbar-expand-md navbar-dark sss-black text-uppercase">
    <div class="container-fluid">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-plus"></i>New Order</a>
            </li>
            <li class="d-none d-lg-block">
                <span class="divider-vertical"></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-cloud-upload-alt"></i>Uploads</a>
            </li>
            <li class="d-none d-lg-block">
                <span class="divider-vertical"></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user"></i>My Account</a>
            </li>
        </ul>
    </div>
</div>
<nav class="bottom-navbar navbar navbar-inverse navbar-expand-lg navbar-dark sss-black text-uppercase ">
    <!--    <div class="container-fluid">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item">
               <a class="nav-link" href="#">Prayer Mats</a>
             </li>
             <li class="d-none d-lg-block">
               <span class="divider-vertical"></span>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Flannel</a>
             </li>
             <li class="d-none d-lg-block">
               <span class="divider-vertical"></span>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Carpets</a>
             </li>
           </ul>
       </div> -->

    <div class="container">
        <a class="navbar-brand" href="{{url('index')}}"><img src="images/kingday2.png"></a>
        <button class="navbar-toggler align-self-end" type="button" data-toggle="collapse" data-target="#headNavbar" aria-controls="headNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse align-self-end" id="headNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('minkblanket')}}">Mink Blankets<span class="sr-only">(current)</span></a>
                </li>
                <li class="d-none d-lg-block">
                    <span class="divider-vertical"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('prayermat')}}">Prayer Mats</a>
                </li>
                <li class="d-none d-lg-block">
                    <span class="divider-vertical"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('flannel')}}">Flannel</a>
                </li>
                <li class="d-none d-lg-block">
                    <span class="divider-vertical"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('carpet')}}">Carpets</a>
                </li>
                <!--           <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                          </li> -->
                <!--           <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown07">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </li> -->
            </ul>

            <form class="form-inline my-2 my-md-0 align-self-center">
                <!-- <i class="fas fa-search"></i> -->
                <div class="inner-addon left-addon">
                    <i class="glyphicon glyphicon-search"></i>
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </div>
                <!--           <input class="form-control" type="text" placeholder="Search" aria-label="Search"> -->
            </form>
            <a href="" class="text-warning"><i class="fas fa-shopping-bag fa-lg align-self-end"></i></a>
        </div>
    </div>
</nav>




<section id="path">
    <div aria-label="breadcrumb">
        <ol class="breadcrumb my-0 sss-gray rounded-0">
            <li><a href=""><i class="fas fa-chevron-circle-left mr-2 text-warning"></i></a></li>
            <li class="breadcrumb-item"><a href="#" class="text-warning">Home</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-warning">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </div>
</section>

@yield('content')




<div id="foot-block">
    <footer class="footer">
        <div class="sss-black text-white">
            <div class="container">
                <div class="row">
                    <div class="p-4 col-md-6 mt-3">
                        <!-- <h2 class="mb-4 text-secondary">Kingday</h2> -->
                        <a href="{{url('index')}}"><img class="d-block img-fluid mx-auto" src="images/kingday2.png" ></a>
                        <!-- <p class="text-white">A company for whatever you may need, from website prototyping to publishing</p> -->
                    </div>
                    <div class="p-4 col-md-6 text-md-left text-center">
                        <h2 class="mb-4">Contact</h2>
                        <p>
                            <i class="fas d-inline fa-phone mr-1 sss-text-gray"></i><a href="tel:+1019876 543 21 00" class="text-white"><!-- <i class="fas d-inline mr-1 sss-text-gray fa-phone"></i> -->+1019876 543 21 00</a>
                        </p>
                        <p>
                            <i class="fas d-inline fa-address-card mr-1 sss-text-gray"></i><a href="mailto:sales@king-day.com" class="text-white"><!-- <i class="fas d-inline mr-1 sss-text-gray fa-address-card"></i> -->sales@king-day.com</a>
                        </p>
                        <p>
                            <i class="fas d-inline fa-map-marker mr-1 sss-text-gray"></i><a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank"><!-- <i class="fas d-inline mr-1 fa-map-marker sss-text-gray"></i> -->365 Park Street, NY</a>
                        </p>
                    </div>
                </div>
                <!-- <div class="row">
                  <div class="col-md-12 mt-3">
                    <p class="text-center text-white">© Copyright 2018 Kingday - All rights reserved. </p>
                  </div>
                </div> -->
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
<script src="js/css.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<!-- Include all compiled plugins (below), or include individual files as needed -->


</body>
</html>


