<?php
$rollnumber = $_REQUEST['rollnumber'];
$labname = $_REQUEST['lab'];
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "no_due_form";  
                      
$con = mysqli_connect($host, $user, $password, $db_name);


$status = $_REQUEST['status'];
if($status == 'Hold')
{
    $remarks = $_REQUEST['remarks'];
    if($remarks=="")
    {
        $remarks = 'No Remarks';
    }
    $qry ="UPDATE `nodue_status` SET `Date`=CURDATE(), `Remark`='$remarks', `Status`='$status' WHERE `Roll Number`='$rollnumber' AND `Lab`='$labname'";
}
else
{
    $qry ="UPDATE `nodue_status` SET `Date`=CURDATE(), `Remark`='No Remarks', `Status`='$status' WHERE `Roll Number`='$rollnumber' AND `Lab`='$labname'";
}

$run = mysqli_query($con, $qry);                    
echo $remarks;
?>
