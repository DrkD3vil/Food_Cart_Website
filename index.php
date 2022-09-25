<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<a href="admin.php">Admin</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
	<style>
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 25%; /* Four links of equal widths */
  text-align: center;
}

.navbar a:hover {
  background-color: #000;
}

.navbar a.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<body>
<div class="navbar">
  <a class="active" href="admin1.php"><i class="fa fa-fw fa-home"></i> Admin</a> 
  <a href="users.php"><i class="fa fa-fw fa-search"></i> users</a> 
  <a href="upload-design.php"><i class="fa fa-fw fa-envelope"></i> upload</a> 
  <a href="product.php"><i class="fa fa-fw fa-user"></i> product</a>
</div>


</body>
</html>