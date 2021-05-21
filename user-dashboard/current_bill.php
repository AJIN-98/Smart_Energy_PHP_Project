<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Smart Energy Meter-User</title>
    
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
    <link href="css/current_bill.css" rel="stylesheet">
  </head>
  <body>


  <?php
  include 'connection.php';
  session_start();
  $lasturl=$_SERVER['HTTP_REFERER'];
  $month = date("F");

  $consumerid =$_SESSION["consumerid"];
  if(isset($_SESSION['consumerid'])){
      $sql="SELECT * FROM `orderid` WHERE `month`='$month' AND  `consumernumber`='$consumerid'";
      $result = mysqli_query($conn,$sql);
      $row = $result->fetch_assoc();
      $sql1="SELECT* FROM `consumerdetails` WHERE `consumernumber`='$consumerid'";
      $result1 = mysqli_query($conn,$sql1);
      $row1= $result1->fetch_assoc();





  ?>









    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Smart Energy Meter</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="graph ml-auto">
   <h5><?php echo $row1['name'] ?></h5>
   </div>
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
            <a class="nav-link" href="user_dash.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="current_bill.php">
              <span data-feather="dollar-sign"></span>
              Current Bill
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bill_history.php">
              <span data-feather="rotate-ccw"></span>
              Bill History
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="graph.php">
              <span data-feather="bar-chart"></span>
              Graph 
            </a>
          </li>
        </ul>
      </div>
    </nav>
 <!-- content here -->
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">    
   <h2 class="hd" align="center">Current Bill</h2>
   <hr>
   <table class="table_user" align="center">
   <tr>
        <th>Name</th>
        <td> <?php echo $row1['name']; ?> </td>
      </tr>
      <tr>
        <th>Consumer id</th>
        <td> <?php echo $row['consumernumber']; ?> </td>
      </tr>
          <tr>
            <th>Billed Amount</th>
            <td><?php echo $row['totalamount']; ?></td>
          </tr>
          <tr>
          <th>Month</th>
          <td><?php echo $row['month']; ?></td>
        </tr>
        <tr>
          <th>Blink Value</th>
          <td><?php echo $row['blinkingvalue']; ?></td>
        </tr>
      </table>
  
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>');</script><script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/dashboard.js"></script>
        
        
        
  <?php 
  }
  else{
    header('location:'.$lasturl);
  }
  ?></body>
</html>