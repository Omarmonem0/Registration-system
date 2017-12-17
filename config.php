<?php
/**
 * Created by PhpStorm.
 * User: Omar Ahmed
 * Date: 10/21/2017
 * Time: 2:39 PM
 */
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="lab2";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>