<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "no_due_form";                        
$con = mysqli_connect($host, $user, $password, $db_name);
$output = '';

session_start();
$username = $username = $_SESSION['login_user']; 
$qry = "SELECT `Roll Number` FROM `student` WHERE `Username`='$username'";
$run = mysqli_query($con, $qry);
$data = $run->fetch_assoc();
$rollno = $data['Roll Number'];


$output .= '<table>
    <thead>
        <tr>
            <th class="text-center">Lab</th>
            <th class="text-center">Remark</th>
            <th class="text-center">Status</th>
            <th class="text-center">Action</th>
            <th class="text-center">Upload</th>
        </tr>
    </thead>
    <tbody>';

$queryStatus = "SELECT * FROM `nodue_status` WHERE `Roll Number`='$rollno'";
$resultStatus = mysqli_query($con, $queryStatus);
$count = 0;
    while($data = $resultStatus->fetch_assoc())
    {
        $count++;
        $labnm = $data['Lab'];
        $labnm = str_replace(" ","_",$labnm);
        if($data["Status"]=="Hold")
        {
        $output .= '
            <tr>
            <td>'.$data["Lab"].'</td>
            <td>'.$data["Remark"].'</td>
            <td>Rejected</td>
            <td><button type="button" class="btn btn-success" id="accept'.$data["Lab"].'" onclick= Reapply("'.$labnm.'")>Reapply</button></td>
            <td><a href="fileupload.php"><button type="button" id="myBtn" class="btn btn-success">Upload Receipt</button></a>
            </td>
            </tr>
            ';
        }
        else
        {
            $output .= '
            <tr>
            <td>'.$data["Lab"].'</td>
            <td>'.$data["Remark"].'</td>
            <td>'.$data['Status'].'</td>
            <td>No Action</td>
            <td><button type="button" class="btn btn-success" disabled>Upload Receipt</button></td>
            </tr>
            ';
        }
    }
    $output .='</tbody>
    </table>';
    echo $output;
    ?>
    