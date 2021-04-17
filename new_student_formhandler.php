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
$firstname = $_POST['firstname']; 
$middlename = $_POST['middlename']; 
$lastname = $_POST['lastname']; 
$rollno = $_POST['rollno']; 
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];  
$department = $_POST['department'];    
$class = $_POST['class']; 
$sem = $_POST['sem'];  
$username = $_POST['username'];  
$password = $_POST['password'];  

$firstname = stripcslashes($firstname); 
$middlename = stripcslashes($middlename);
$lastname = stripcslashes($lastname);
$rollno = stripcslashes($rollno);  
$email = stripcslashes($email);  
$mobileno= stripcslashes($mobileno);  
$department = stripcslashes($department); 
$username = stripcslashes($username);  
$password = stripcslashes($password);  
$firstname = mysqli_real_escape_string($con, $firstname);  
$middlename = mysqli_real_escape_string($con, $middlename);
$lastname = mysqli_real_escape_string($con, $lastname);
$rollno = mysqli_real_escape_string($con, $rollno); 
$email = mysqli_real_escape_string($con, $email);         
$mobileno = mysqli_real_escape_string($con, $mobileno);  
$department = mysqli_real_escape_string($con, $department);       
$username = mysqli_real_escape_string($con, $username);  
$password = mysqli_real_escape_string($con, $password);  

$name = $firstname.' '.$lastname;

$sql="INSERT INTO `student`(`Firstname`, `Middlename`, `Lastname`,`Name`, `Roll Number`, `Email`, `Class`, `Sem`, `Mobile`, `Department`, `Username`, `Password`) VALUES  ('$firstname', '$middlename', '$lastname', '$name', '$rollno','$email', '$class', '$sem', '$mobileno','$department','$username','$password')";
if (mysqli_query($con, $sql)) {
    header('location:student_login.php');;  
  } else {
    session_destroy();
	header('location:student_login.php?msg=failed');  
  }
  

?>
