<?php   
session_start();
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "no_due_form";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
$username = $_SESSION['login_user']; 
$rollno = $_POST['rollno'];
$sem = $_POST['sem'] ;

$sql="UPDATE `student` SET `Sem`='$sem', `Roll Number`='$rollno' WHERE `Username`='$username'";


if (mysqli_query($con, $sql)) {

    header('location:student_nodue_registration_formhandler2.php?RollNumber='.$rollno.''); 

  } 
?>
