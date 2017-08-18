<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<script>
function hideErrdiv(){	
  $("#errDiv").fadeOut(3000);
}
</script>
<body onload="javascript:hideErrdiv();">

<div class="container">
<?php
session_start();
if(isset($_SESSION['login'])){
 
if($_SESSION['login']=='f'){

echo'  <div class="alert alert-danger" id="errDiv" style="margin-top: 10px;">
    <strong>Login Failed!</strong> Please enter valid login credentials.
  </div>'; 
}else{

echo '<div class="alert alert-success">
  <strong>Login Success!</strong> Welcome
</div>';

		}
	}

?>
 <h2 style="margin-left:20%; margin-bottom:2%;">Login</h2>
  <form class="form-horizontal" role="form" action="loginValidate.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="username" placeholder="Enter username" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-3">          
        <input type="password" class="form-control" name="password" placeholder="Enter password" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>

