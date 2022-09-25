<?php 
	include("connection.php");
    $id=$_GET['updateid'];
	$sql="SELECT *FROM `users` WHERE id=$id";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
    $user_name=$row['user_name'];
	$password=$row['password'];

    if(isset($_POST['submit'])){
        $id=$_POST['submit'];
        
       $user_name=$_POST['submit'];
       $password=$_POST['submit'];
       $date=$_POST['submit'];
       //UPDATE `users` SET `id`='[id]',`user_id`='[$user_id]',`user_name`='[$user_name]',`password`='[$password]',`date`='[#@date]' ;
       $sql=" UPDATE `users` SET `id`='[$id]',`user_id`='[$user_id]',`user_name`='[$user_name]',`password`='[$password]',`date`='[#@date]'";
       $result=mysqli_query($con,$sql);
        if($result){
            //header ('location:update.php');
			echo 'Successfully';
        }
		else{
			echo 'no';
		}
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name" value=<?php echo $user_name ?>><br><br>
			<input id="text" type="password" name="password" value=<?php echo $password ?>><br><br>

			<input id="button" type="submit" value="submit"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>