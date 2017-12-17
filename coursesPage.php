<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css"/>
   <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
</head>
<body>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Omar Ahmed
 * Date: 10/21/2017
 * Time: 4:39 PM
 */
session_start();
$usernmae=$_SESSION['username'];
echo "<p class='text-primary'>"."welcome"." ".$_SESSION['username']."</p>";
require_once('config.php');
 
$id=$_GET['id'];
$query = "UPDATE users SET department_id='".$id."' WHERE username='".$usernmae."'";
$result=mysqli_query($conn,$query);
if ($result === TRUE) {
   // echo "student enrolled sucessfully";
 
}
 
$query="SELECT * FROM courses WHERE department_id='".$id."'";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($result)) {
    echo "<div id='container'>";
    echo "<ul class=\"list-group\">";
 
    echo "<li class=\"list-group-item list-group-item-success\">Course name: ".$row['course_name']."</li>";
 
    echo "<li class=\"list-group-item list-group-item-info\">Description: ".$row['course_description']."</li>";
 
    echo "<li class=\"list-group-item list-group-item-warning\">Instructor:".$row['instructor_name']."</li>";
 
    echo "<li class=\"list-group-item list-group-item-danger\">Credit hours: ".$row['credit_hours']."</li>";
 
    echo "<ul>";
    echo "</div>";
 
}

?>