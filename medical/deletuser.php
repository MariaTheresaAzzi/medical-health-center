<?php


$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name)or die(mysqli_error($mysqli));


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    
 
      $sql = "INSERT INTO users (name,uname,password,role) 
     VALUES('$name', '$uname','$password', '$role')";}
      
if(isset($_GET['delete'])) {
    $id=$_GET['delete'];
  
    $sql="DELETE FROM users WHERE id=$id";
    $result=mysqli_query($conn,$sql)or die($mysqli->error());}
  


header("location:/Login-registration-System-PHP-and-MYSQL-master/admindisp.php");
exit;
    

?>