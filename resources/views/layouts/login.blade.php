<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Project') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


<nav class="bottom-navbar navbar navbar-inverse navbar-dark sss-black">
    <div class="container d-flex justify-content-center">
        <a class="navbar-brand mx-0" href="#"><img src="images/kingday2.png"></a>
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




    <main class="py-4">
        @yield('content')
    </main>
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
<script src="js/app.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<!-- Include all compiled plugins (below), or include individual files as needed -->

</body>
</html>
