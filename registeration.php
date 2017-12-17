<?php
/**
 * Created by PhpStorm.
 * User: Omar Ahmed
 * Date: 10/21/2017
 * Time: 1:07 PM
 */
    require_once('config.php');
    session_start();
    $email=$_POST['email'];
    $query="SELECT user_id FROM users WHERE user_email='".$email."'";
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) != 0)
    {
        echo "user is already exist";
    }
    else{
        $password=md5($_POST['password']);
        $username=$_POST['username'];
        $_SESSION['username']=$username;
        $query="INSERT into users(username,user_email,user_password) values ('$username','$email','$password')";
        $result=mysqli_query($conn,$query);

       // echo "registertion is completed succefully";
       if ($result === TRUE) {
            echo "New record created successfully";
            //header("location:chooseDepartment.php");
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

    }








?>