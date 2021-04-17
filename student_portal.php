<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <style>
    .full {
        background-image: url("images/homepage-background.jpg");
        background-size: cover;
        width: 100% !important;
        height: 100% !important;
        background-position: center;
        position: absolute;
        margin-top: -8px;
        margin-left: -8px;
    }
    </style> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <!-- <link rel="stylesheet" type="text/css" media="all" href="css_files/home_page.css"> -->
    <link rel="stylesheet" type="text/css" href="./css_files/student_portal.css">
    <script src="https://kit.fontawesome.com/f935d9d29d.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="full">
        <div class="box">
            <div class="header">STUDENT PORTAL</div>
            <div class="box2">
                <ul style="list-style-type:none;">
                    <?php
                    $host = "localhost";  
                    $user = "root";  
                    $password = '';  
                    $db_name = "no_due_form";                        
                    $con = mysqli_connect($host, $user, $password, $db_name);
                    session_start();
                    $username = $username = $_SESSION['login_user']; 
                    $qry = "SELECT `Roll Number` FROM `student` WHERE `Username`='$username'";
                    $run = mysqli_query($con, $qry);
                    $data = $run->fetch_assoc();
                    $rollno = $data['Roll Number'];

                    $sql = "SELECT * from `nodue_status` WHERE `Roll Number` = '$rollno'";  
                    $result = mysqli_query($con, $sql);  
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                    $count = mysqli_num_rows($result);  
                    
                    if($count > 1){  
                    ?>
                        <li><p class="registered"><i class="fas fa-check"></i>You have already applied For Due Form</p></li> 
                        <li><?php echo"<p class='registered'><i class=\"fas fa-long-arrow-alt-right\"></i>View Status Of No Due Form</p><a href='view_form_status.php?RollNumber=$rollno'><button>View</button></li>";
                    ?>     
                    <?php
                    }
                    else{  
                        ?>
                        <li><p><i class="fas fa-long-arrow-alt-right"></i>Apply For Due Form </p><a href="student_nodue_registration.php"><button>View</button></a></li> 
                        <li><p class="registered">View No Due Form Status after applying</p></li>
                        <?php
                    } 
                    ?>
                   
               </ul>
           </div>
       </div>
   </div>
   
</body>
</html>