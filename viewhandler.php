<?php session_start();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "no_due_form"; 

if(isset($_GET['RollNumber'])){
    $RollNumber=$_GET['RollNumber'];
}
$labid = $_SESSION['faculty_login'];
//echo $labid;
//echo $RollNumber;
$conn = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}
$sql="select document from fileup where `Roll Number`='$RollNumber' and LabId='$labid' limit 1";
//$name=mysqli_query($con,$sql);   
$stmt=mysqli_prepare($conn,$sql);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt,$name);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);
mysqli_close($conn);

if($name==null){echo "no file uploaded";}
else{

    header('location:Documents/'.$name.'');
}




?>
    
</body>
</html>