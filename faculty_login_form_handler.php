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
    $labid = $_POST['labid'];  
    $password = $_POST['password'];  
      
        
        $labid = stripcslashes($labid);  
        $password = stripcslashes($password);  
        $labid = mysqli_real_escape_string($con, $labid);  
        $password = mysqli_real_escape_string($con, $password); 

        $sql = "select * from admin where Username = '$labid' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
                            echo "Logged in <br>";
							$_SESSION['faculty_login']=$labid;
							echo $_SESSION['login_user']." is logged in";
							header('location:application_status.php'); 
        }  
        else{  
                            echo "Login Error";
							session_destroy();
							header('location:faculty_login.php?msg=failed'); 
        }      
      
       /* $sql = "select * from `labs` where `LabId` = '$labid'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
                            echo "Logged in <br>";
							$_SESSION['faculty_login']=$labid;
							header('location:application_status.php');
        }  
        else{  
                            echo "Login Error";
							//session_destroy();
							//header('location:faculty_login.php?msg=failed');  
                            echo $labid;
                            echo $labid;
                            echo $password;
        }     */
?> 