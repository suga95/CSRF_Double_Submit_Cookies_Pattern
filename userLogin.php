<!DOCTYPE html>
<html>
<head>
	<title> Double Submit Cookies Pattern Protection for Cross Site Request Foregery</title>
	<link rel="stylesheet" href="myStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>

<h2> Happy Login Form</h2>

<form action="UserRegister.php" method="post">
  <div class="imgcontainer">
    <img src="myImage.png" alt="Avatar" class="avatar" style="width:250px;height:250px;">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username SUGA" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password HINT:-First four numbers" name="psw" required>
        
    <button type="submit" name = "login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
