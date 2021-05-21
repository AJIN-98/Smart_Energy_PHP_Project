<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="login.css">
<link rel = "icon" href ="https://webstockreview.net/images/electrical-clipart-electrical-technology-18.png" type = "image/x-icon"> 
</head>
<body class="body">
    <div class="main" align="center">
        <div class="ico">
            <img src="https://webstockreview.net/images/electrical-clipart-electrical-technology-18.png" alt="logo">
        </div>
        <div class="head">
            <h2>Please sign in</h2>
        </div>
        <form method="POST" action="loginbck.php">
        <div class="form-group form">
          <input type="text"class="form-control b1" name="username" id="" aria-describedby="helpId" placeholder="user name">
           <input type="password" class="form-control b2" name="passcode" id="" placeholder="password">
  
           <button type="submit" class=" mt-3 btn btn-primary">Submit</button>
         </div> 
         </form>
</body>
</html>