<?php session_start();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" media="all" href="./css_files/printstyle.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <div class="content">
<div class="head">
    <div class="logo"><img src="./images/logo.png" alt="logo">
    <span>
        <h2>RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h2>
        <H4>DY PATIL, VIDYANAGAR, SEC-7, PHASE 1, NERUL, NAVI MUMBAI-400706</H4>
    </span></div>
    <hr><hr>
    <h3>NO DUE APPLICATION FORM</h3><hr><hr>
</div>
    <?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "no_due_form";
$output = '';
$con = mysqli_connect($host, $user, $password, $db_name);
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}

if(isset($_GET['RollNumber'])){
    $RollNumber=$_GET['RollNumber'];
}

$query = "SELECT * FROM `student` WHERE `Roll Number`='$RollNumber'";
$resultStudent = mysqli_query($con, $query);  
$student=mysqli_fetch_assoc($resultStudent);
echo "<div class='date'>DATE: ";echo date('Y-m-d');echo"</div>";
echo "
<table class='details'>
<tr>
<th>First Name</th>
<td>". $student["Firstname"]. "</td>
</tr>
<tr>
<th>Middle Name</th>
<td>". $student["Middlename"]. "</td>
</tr>
<tr>
<th>Last Name</th>
<td>". $student["Lastname"]. "</td>
</tr>
<tr>
<th>Roll Number</th>
<td>". $student["Roll Number"]. "</td>
</tr>
<tr>
<th>Department</th>
<td>". $student["Department"]. "</td>
</tr>
<tr>
<th>Email</th>
<td>". $student["Email"]. "</td>
</tr>
<tr>
<th>Class</th>
<td>". $student["Class"]. "</td>
</tr>
<tr>
<th>Semester</th>
<td>". $student["Sem"]. "</td>
</tr>
<tr>
<th>Mobile Number</th>
<td>". $student["Mobile"]. "</td>
</tr>
</table>
<hr><hr>";
$queryStatus = "SELECT * FROM `nodue_status` WHERE `Roll Number`='$RollNumber'";
$resultStatus = mysqli_query($con, $queryStatus);
$count = 0;
$output .= '<table>
    <thead class="tablehead">
        <tr>
            <th class="text-center">Lab</th>
            <th class="text-center">Remark</th>
            <th class="text-center">Status</th>
           
        </tr>
    </thead>
    <tbody>';
    while($data = $resultStatus->fetch_assoc())
    {
        $count++;
        $labnm = $data['Lab'];
        if($labnm=="Principal")
        $status=$data['Status'];
        if($labnm!="Principal"){
        $labnm = str_replace(" ","_",$labnm);
        
       
            $output .= '
            <tr>
            <td>'.$data["Lab"].'</td>
            <td>'.$data["Remark"].'</td>
            <td class="status">'.$data['Status'].'</td>
            
            </tr>
            ';
        }
        
    }
    $output .='</tbody>
    </table>';
    echo $output;
   

    echo "<br><br>";
    echo "
    <table>
    <tr>
    <th>Principal<br>(Ramrao Adik Institute of Technology)</th>
    <td>$status</td>
    </tr>
    </table>";
?>
</div>
</body>
</html>
