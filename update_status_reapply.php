<?php
$labname = $_REQUEST['lab'];
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "no_due_form";  
                      
$con = mysqli_connect($host, $user, $password, $db_name);

session_start();
$username = $_SESSION['login_user']; 
$qry = "SELECT `Roll Number` FROM `student` WHERE `Username`='$username'";
$run = mysqli_query($con, $qry);
$data = $run->fetch_assoc();
$rollno = $data['Roll Number'];


$status = $_REQUEST['status'];

$qry ="UPDATE `nodue_status` SET `Date`=CURDATE(), `Remark`='No Remarks', `Status`='$status' WHERE `Roll Number`='$rollno' AND `Lab`='$labname'";

$run = mysqli_query($con, $qry);                    
echo $rollno;
?>