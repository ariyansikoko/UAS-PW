<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="styles.css">
	<style>
		div{
			width: 300px;
			display: block;
			margin: auto; 
    }

    h2 {
      margin-left: auto;
      margin-right: auto;
      text-align: center;
    }

    form {
      margin-top: 20vh;
    }
	</style>
</head>
<body>
<form method="POST" action="aksi_login.php" class="login-form">
  <div>
    <h2>Login</h2>
  </div>

  <div class="mb-3 mx-auto">
    <label class="form-label"><b>Username</b></label>
    <input name="username" type="text" class="form-control" placeholder="Enter Username">
  </div>
  <div class="mb-3">
    <label class="form-label"><b>Password</b></label>
    <input name="password" type="password" class="form-control" placeholder="Enter Password">
  </div>
  <div>      
    <button type="submit" class="btn btn-primary">Login</button>
  </div>
  <div class="form-text">
    <a href="">forgot password?</a>
</div>
</form>


<script src="js/bootstrap.js"></script>
</body>
</html>

?>