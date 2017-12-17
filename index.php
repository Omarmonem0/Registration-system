<?php
/**
 * Created by PhpStorm.
 * User: Omar Ahmed
 * Date: 10/21/2017
 * Time: 1:45 PM
 */
session_start();
require_once ('config.php');
if (isset($_POST['email'],$_POST['password'])) {
    $email = $_POST['email'];
    $password =md5($_POST['password']);
    $query = "SELECT username,department_id FROM users WHERE user_email='" . $email . "' AND user_password='" . $password . "' ";
    $result = mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result);
    echo $conn->error;

    if (mysqli_num_rows($result) == 0) {
        echo "<div class='container'>";
        echo"<div class=\"alert alert-danger\">
  <strong>Wrong!</strong> check email and password
</div>";



       echo"</div>";
    } else {
            $_SESSION['username']=$row['username'];
            if($row['department_id']== null){
                header('location:chooseDepartment.php');
            }else{
                header('location:coursesPage.php?id='.$row['department_id']);


            }

    }

}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign up</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css"/>
    <script src="bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="ajax.js"></script>

</head>
<body>
<div   class="container">


    <form  id="form" >
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input required type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input required type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input  required type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
        </div>


        <input type="button" class="btn btn-primary btn-lg btn-block" value="Sign up" onclick="myFunction()">
    </form>

    <form method="post" action="index.php" id="form2">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input required type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="margin-bottom: 15 px">
            <br>

        <button type="submit" class="btn btn-success btn-lg btn-block" style="margin-top: 15 px">Sign in</button>
    </form>

</div>

</body>
</html>
