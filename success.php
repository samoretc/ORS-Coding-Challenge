<?php
include('verify.php');
?>

<!DOCTYPE html>
<style>
 body{ 
  background: url('http://i.ytimg.com/vi/4mGFPXc0WFg/maxresdefault.jpg');
/* Background image is centered vertically and horizontally at all times */
  background-position: center center;
  
  /* Background image doesn't tile */
  background-repeat: no-repeat;
  
  /* Background image is fixed in the viewport so that it doesn't move when 
     the content's height is greater than the image's height */
  background-attachment: fixed;
  
  /* This is what makes the background image rescale based
     on the container's size */
  background-size: cover;
  
  /* Set a background color that will be displayed
     while the background image is loading */
  background-color: #464646;
}
.bx{

  z-index: 101;
  width: 500px;
  margin: auto;
  padding: 15px;
  margin-top: 100px;
  z-index: -1;
}

.panel-info{
  background-color: rgba(255, 255, 255, 0.9);
}

</style>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>

<body>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 
<div class = "bx">
<div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">ORS, Inc Home page</h3>
      </div>
      <div class="panel-body">
        <h3 class = "text-center">Welcome, <?php echo $_SESSION["login_user"]; ?>!</h3>
        <br><br><br><br>
      </div>
    </div>
</div>

</body>
</html>