<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "no_due_form";                        
$con = mysqli_connect($host, $user, $password, $db_name);
$output = '';

session_start();
$labid = $_SESSION['faculty_login'];
$queryLab = "SELECT `Lab` FROM `labs` WHERE `LabId`='$labid'";
$resultLab = mysqli_query($con, $queryLab);
$lab = mysqli_fetch_assoc($resultLab);
$labname = $lab['Lab'];



$output .= '<table>
    <thead>
    <tr>
    <th class="text-center">No.</th>
    <th class="text-center">Roll Number</th>
    <th class="text-center">Student Name</th>
    <th class="text-center">Semester</th>
    <th class="text-center">Department</th>
    <th class="text-center">Remark</th>
    <th class="text-center">Accept</th>
    </tr>
    </thead>
    <tbody>';

if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($con, $_POST["query"]);
    $queryStatus = "SELECT `Roll Number`,`Remark` FROM `nodue_status` WHERE `Lab`='$labname' AND `Status`='Hold' AND `Roll Number` LIKE '%".$search."%'";
    $resultStatus = mysqli_query($con, $queryStatus);
    $search = mysqli_real_escape_string($con, $_POST["query"]);
    $count = 0;
    while($data = $resultStatus->fetch_assoc())
    {
        $roll = $data['Roll Number'];
        $queryStudent = "SELECT * FROM `student` WHERE `Roll Number`='$roll'";
        $resultStudent = mysqli_query($con, $queryStudent);  
            $student=mysqli_fetch_assoc($resultStudent);
            $count++;
            $output .= '
            <tr>
                        <td>'.$count.'</td>
                        <td>'.$student['Roll Number'].'</td>
                        <td>'.$student['Name'].'</td>
                        <td>'.$student['Sem'].'</td>
                        <td>'.$student['Department'].'</td>
                        <td>'.$data['Remark'].'</td>
                        <td>
                        <button type="button" class="btn btn-success" id="accept'.$student["Roll Number"].'" onclick= Accept("'.$student["Roll Number"].'")>Accept</button>
                        </td>
                    </tr>
            ';
    }
}
else
{
    $queryStatus = "SELECT `Roll Number`,`Remark` FROM `nodue_status` WHERE `Lab`='$labname' AND `Status`='Hold'";
    $resultStatus = mysqli_query($con, $queryStatus);
    $count = 0;
    while($data = $resultStatus->fetch_assoc())
    {
        $roll = $data['Roll Number'];
        $queryStudent = "SELECT * FROM `student` WHERE `Roll Number`='$roll'";
        $resultStudent = mysqli_query($con, $queryStudent);  
        $student=mysqli_fetch_assoc($resultStudent);
        $count++;
        $output .= '
        <tr>
                        <td>'.$count.'</td>
                        <td>'.$student['Roll Number'].'</td>
                        <td>'.$student['Name'].'</td>
                        <td>'.$student['Sem'].'</td>
                        <td>'.$student['Department'].'</td>
                        <td>'.$data['Remark'].'</td>
                        <td>
                        <button type="button" class="btn btn-success" id="accept'.$student["Roll Number"].'" onclick= Accept("'.$student["Roll Number"].'")>Accept</button>
                        </td>
                    </tr>
		';
    }
}

$output .='</tbody>
</table>';
echo $output;
?>