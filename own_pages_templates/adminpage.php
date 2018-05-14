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
      <li><a href=""><i class="fas fa-chevron-circle-left mr-2 text-warning"></i></a></li>
      <li class="breadcrumb-item"><a href="#" class="text-warning">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Admin</li>
    </ol>
  </div>
</section>








<section id="middlePage" class="bg-white my-5">

  <div class="row">
    <div class="col-sm-12 col-md-5 col-lg-4 col-xl-3 sss-lgray d-flex align-items-center">
      <div class="container d-flex align-items-center">
        <div class="container-fluid">
              <!-- <h1 class="text-uppercase sss-text-black">Arkyn</h1> -->
              <h3 class="text-uppercase">Admin Dashboard</h3>
              <div class="list-group">
                <a href="index.php"><button type"button" class="btn sss-black sss-text-white rounded-0 text-uppercase px-4">Show Users<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
                <a href="index.php"><button type"button" class="btn sss-black sss-text-white rounded-0 text-uppercase px-4">Edit Users<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
                <a href="index.php"><button type"button" class="btn btn-warning rounded-0 text-uppercase px-4">Upload Product<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
<!--                 <a href="index.php"><button type"button" class="btn btn-warning rounded-0 text-uppercase px-4">Edit Account<i class="fas fa-chevron-circle-right ml-2"></i></button></a> -->
                <a href="#" class="list-group-item list-group-item-action sss-lgray sss-text-black font-weight-bold px-0 border-0 rounded-0">Log Out</a>
          </div>
        </div>
      </div>  
    </div>
    <div class="col-sm-12 col-md-7 col-lg-8 col-xl-9"> 
      <div class="container d-flex align-items-center">
        <form class="container">

              <h1>Upload</h1>
              <h3>Please enter your details below</h3> 

          <!-- <div class="row">
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label for="firstName">Title*</label>
                <input type="text" class="form-control rounded-0" id="firstName">
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label for="secondName">Second Name*</label>
                <input type="text" class="form-control rounded-0" id="secondName">
              </div>
            </div>
          </div> -->
<!--           <div class="row">
              <div class="form-group col">
                <label for="companyName">Title</label>
                <input type="text" class="form-control rounded-0" id="productTitle">
              </div>
          </div> -->
<!--           <div class="row">
              <div class="form-group col">
                <label for="address">Address*</label>
                <input type="text" class="form-control rounded-0" id="address">
              </div>
          </div> -->
          <div class="row">
            <div class="form-group col-md-4">
              <label for="productCategory">Category</label>
              <select id="productCategory" class="form-control text-uppercase rounded-0">
                <option selected>Other</option>
                <option>Mink Blanket</option>
                <option>Carpet</option>
                <option>Prayer Mats</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label for="productTitle">Title*</label>
                <input type="text" class="form-control rounded-0" id="productTitle">
              </div>
            </div>
            <div class="col-12 col-lg-6 sss-gray sss-text-white">
              <div class="form-group">
                  <label for="productImage">Image</label>
                  <input type="file" class="form-control-file rounded-0" id="productImage">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label for="productQuantity">Quantity*</label>
                <input type="number" class="form-control rounded-0" id="productQuantity" min="1">
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label for="productCode">Generated Code</label>
                <input type="text" id="productCode" class="form-control rounded-0" placeholder="#GENERATED CODE" disabled="true"> 
              </div>
            </div>
          </div>
<!--           <div class="row">
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label for="email">Email Address*</label>
                <input type="email" class="form-control rounded-0" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-group">
                  <label for="productImage">Image</label>
                  <input type="file" class="form-control-file" id="productImage">
              </div>
            </div>
          </div> -->
<!--           <div class="row">
            <div class="form-group col">
              <label for="passwordUser">New Password</label>
              <input type="password" class="form-control rounded-0" id="passwordUser">
              <small id="passwordHelpBlock" class="form-text text-muted">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
              </small>
            </div>
          </div> -->
          <div class="row">
            <div class="form-group col">
              <label for="notes">Notes</label>
              <textarea class="form-control rounded-0" id="productNotes" rows="5" placeholder="Notes about your product, e.g special notes."></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <button type="submit" class="btn btn-primary rounded-0 text-uppercase px-4 py-2">Submit<i class="fas fa-chevron-circle-right ml-2"></i></button>
            </div>
          </div>
    <!-- 
          <h1 class="text sss-text-gray">404</h1>
          <h3>Oops, This Page Could Not Be Found!</h3>

          <div class="list-group">
            <a href="index.php"><button type"button" class="btn btn-dark sss-black rounded-0 text-uppercase px-4">Home Page</button></a>
            <a href="#" class="list-group-item list-group-item-action px-0 border-0">Favourite Desings</a>
            <a href="#" class="list-group-item list-group-item-action px-0 border-0">Orders</a>
            <a href="#" class="list-group-item list-group-item-action px-0 border-0">Shipments</a>
            <a href="#" class="list-group-item list-group-item-action px-0 border-0 rounded-0">Log Out</a>
          </div> -->
        </form>
      </div>  
    </div>
  </div>
  
  
</section>











<div id="foot-block">
  <footer class="footer">
    <div class="sss-black text-white">
      <div class="container py-3">
            <a href=""><img class="d-block img-fluid mx-auto" src="img/kingday2.png" ></a>
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