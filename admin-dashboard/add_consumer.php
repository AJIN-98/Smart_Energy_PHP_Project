<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Smart Energy Meter-admin</title>
    
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel = "icon" href ="https://webstockreview.net/images/electrical-clipart-electrical-technology-18.png" type = "image/x-icon"> 

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/add_consumer.css" rel="stylesheet">
  </head>
  <body>
      <?php
    include 'connection.php';
    session_start();
    error_reporting(0);
    $out= $_GET['out'];
    $lasturl=$_SERVER['HTTP_REFERER'];
    if(isset($_SESSION['admin'])){
         ?>







  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Smart Energy Meter</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="signout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="admin_dash.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bill_search.php">
              <span data-feather="search"></span>
              Bill Search
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="add_consumer.php">
              <span data-feather="plus"></span>
              Add Consumer
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <?php 
      if($out==1){
        echo ' <div class="alert mt-5 alert-success" role="alert">
              Consumer added succesfully
               </div>';
          } 
      ?>
      <div class="mt-5" align="center">
        <h3> Add new Consumers <h3>

        </div>
      
   <!-- content here -->
   <form method="post" class="mt-5" action="addconsumerbackend.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Enter  consumer Number</label>
        <input type="text" class="form-control"  id="exampleInputEmail1"name="consumerid" aria-describedby="emailHelp" placeholder="">
        <label for="exampleInputEmail1">Enter  Name</label>
        <input type="text" class="form-control"  id="exampleInputEmail1"name="name" aria-describedby="emailHelp" placeholder="">
        <label for="exampleInputEmail1">Enter  Address</label>
        <input type="text" class="form-control"  id="exampleInputEmail1"name="address" aria-describedby="emailHelp" placeholder="">
        <label for="exampleInputEmail1">Enter Contact Number</label>
        <input type="text" class="form-control"  id="exampleInputEmail1"name="contact" aria-describedby="emailHelp" placeholder="">
        <label for="exampleInputEmail1">Enter Email</label>
        <input type="text" class="form-control"  id="exampleInputEmail1"name="email" aria-describedby="emailHelp" placeholder="">
        <label for="exampleInputEmail1">Enter Password</label>
        <input type="password" class="form-control"  id="exampleInputEmail1"name="password" aria-describedby="emailHelp" placeholder=""><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>'); </script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
      <script src="js/dashboard.js"></script>
</body>
<?php

}


else{
    header('location:'.$lasturl);
}
?>






</html>
