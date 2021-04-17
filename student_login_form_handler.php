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
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from student where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
                            echo "Logged in <br>";
							$_SESSION['login_user']=$username;
							echo $_SESSION['login_user']." is logged in";
							header('location:student_portal.php');;  
        }  
        else{  
                            echo "Login Error";
							session_destroy();
							header('location:student_login.php?msg=failed');  
        }     
?>  
