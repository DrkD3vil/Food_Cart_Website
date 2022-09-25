
<?php
include 'dbconnect.php';
?>
<body>
    <div class="navbar">
  <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="admin.php"><i class="fa fa-fw fa-search"></i> Admin</a> 
  <a href="show.php"><i class="fa fa-fw fa-envelope"></i> dispaly</a> 
  <a href="login.php"><i class="fa fa-fw fa-user"></i> Login</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">User Name</th>
      <th scope="col">Password</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
<?php
    $sql="SELECT * FROM `login`";
    $result=mysqli_query($con,$sql);
    if($result){
        //$row=mysqli_fetch_assoc($result);
        //echo $row['user_name'];
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $user_name=$row['user_name'];
            $password=$row['password'];
            $date=$row['date'];
            echo'
            <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$user_name.'</td>
            <td>'.$password.'</td>
            <td>'.$date.'</td>
            <td>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
            </td>
          </tr>';
        }
    }
    
?>




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



    
    
  </tbody>
</table>

