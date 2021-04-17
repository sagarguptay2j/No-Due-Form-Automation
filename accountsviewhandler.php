<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "no_due_form"; 

$conn = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}

if(isset($_GET['RollNumber'])){
    $RollNumber=$_GET['RollNumber'];
}

$sql="UPDATE `no_due_status` SET `Status`='Verified' WHERE `Roll Number`='$RollNumber' AND 'Lab'='Accounts Section'";


if (mysqli_query($con, $sql)) {

    header('location:accountsviewhandler.php');

  } 

  ?>  
