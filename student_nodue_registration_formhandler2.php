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
if(isset($_GET['RollNumber'])){
  $RollNumber=$_GET['RollNumber'];
} 
$username = $_SESSION['login_user'];
$sql="INSERT INTO `nodue_status` (`Roll Number`,`Lab`) 
SELECT `Roll Number`,`Lab` from `student` 
INNER JOIN `labs` ON (`student`.`Department`=`labs`.`Department`  ) WHERE `student`.`Username`='$username'"; 
if (mysqli_query($con, $sql)) {
  header('location:view_form_status.php?RollNumber='.$RollNumber.''); 
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  
 

?>