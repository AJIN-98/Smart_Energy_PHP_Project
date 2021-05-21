<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Generator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="login.css">
<link rel = "icon" href ="https://webstockreview.net/images/electrical-clipart-electrical-technology-18.png" type = "image/x-icon"> 
</head>
<body>
    <?php
    error_reporting(0);
    $out= $_GET['out'];
    if($out==1){
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong> Order placed </strong> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>
        <?php
    }
    if($out==2){
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong> consumer not registered </strong> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>
        <?php
    }

    ?>
    <div align="center">
    <h3 class="mt-5"> Enter the details to generate order </h3>
    <hr>
    </div>

    <form class="m-5"  method="POST"  action="order.php"> 
        <div class="form-group">
          <label for=""> Enter the Consumer ID</label>
          <input type="text"
            class="form-control" name="consumerid" id="" aria-describedby="helpId" placeholder="">
            <label for=""> Enter the Blinking Value</label>
          <input type="text"
            class="form-control" name="blinkvalue" id="" aria-describedby="helpId" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    
</body>
</html>