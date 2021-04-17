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

if($labname!="Principal")
{
$output .= '<table>
    <thead>
        <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Roll Number</th>
            <th class="text-center">Student Name</th>
            <th class="text-center">Semester</th>
            <th class="text-center">Department</th>
            <th class="text-center">Accept</th>
            <th class="text-center">View Receipt</th>
        </tr>
    </thead>
    <tbody>';
}
else
{
    $output .= '<table>
    <thead>
        <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Roll Number</th>
            <th class="text-center">Student Name</th>
            <th class="text-center">Semester</th>
            <th class="text-center">Department</th>
            <th class="text-center">Accept</th>
            </tr>
            </thead>
            <tbody>';

}

if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($con, $_POST["query"]);
    if(isset($labname) and $labname=="Accounts Section"){        
       $queryStatus = 'SELECT `Roll Number` FROM `nodue_status` WHERE `Roll Number` in (SELECT `Roll Number` FROM `nodue_status` WHERE (`Lab`<>"Accounts Section" and `Status`="Pending")  group by `Roll Number` having count(*)=1 ) AND (`Lab`="Accounts Section" and `Status`="Pending")';
    }
    else if(isset($labname) and $labname=="Principal")
    {
        $queryStatus = 'SELECT `Roll Number` FROM `nodue_status` WHERE `Roll Number` in (SELECT `Roll Number` FROM `nodue_status` WHERE (Lab="Accounts Section" and status="Approved")) and (Lab="Principal" and status="Pending")';
    }
    else{
    $queryStatus = "SELECT `Roll Number` FROM `nodue_status` WHERE `Lab`='$labname' AND `Status`='Pending' AND `Roll Number` LIKE '%".$search."%' ORDER BY `Date` DESC";
    }
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
            if($labname!="Principal"){
            $output .= '
            <tr>
            <td>'.$count.'</td>
            <td>'.$student["Roll Number"].'</td>
            <td class="text-center">'.$student["Name"].'</td>
            <td>'.$student['Sem'].'</td>
            <td>'.$student["Department"].'</td>
            <td>
            <button type="button" class="btn btn-success" id="accept'.$student["Roll Number"].'" onclick= Accept("'.$student["Roll Number"].'")>Accept</button>
            <button type="button" class="btn btn-danger" id="hold'.$student["Roll Number"].'" onclick= Hold("'.$student["Roll Number"].'")>Hold</button>
            
            <div class="input-group mb-3 my-3" id="addRemark'.$student['Roll Number'].'" style="display:none">
                <input type="text" class="form-control" placeholder="Send a Remark to student" id="remarks'.$student['Roll Number'].'" 
                    aria-label="Recipients username" aria-describedby="button-addon2">
                <button class="btn btn-info" type="button" id="remark'.$student['Roll Number'].'" onclick= Remark("'.$student["Roll Number"].'")>Add Remark</button>
            </div>
            </td>
            <td><a href="viewhandler.php?RollNumber='.$student["Roll Number"].'"><button type="button" class="btn btn-success" id="view'.$student["Roll Number"].'" onclick= view("'.$student["Roll Number"].'")>View Receipt</button></a></td>
           
            </tr>
            ';
            }
            else{
                $output .= '
            <tr>
            <td>'.$count.'</td>
            <td>'.$student["Roll Number"].'</td>
            <td class="text-center">'.$student["Name"].'</td>
            <td>'.$student['Sem'].'</td>
            <td>'.$student["Department"].'</td>
            <td>
            <button type="button" class="btn btn-success" id="accept'.$student["Roll Number"].'" onclick= Accept("'.$student["Roll Number"].'")>Accept</button>
            <button type="button" class="btn btn-danger" id="hold'.$student["Roll Number"].'" onclick= Hold("'.$student["Roll Number"].'")>Hold</button>
            
            <div class="input-group mb-3 my-3" id="addRemark'.$student['Roll Number'].'" style="display:none">
                <input type="text" class="form-control" placeholder="Send a Remark to student" id="remarks'.$student['Roll Number'].'" 
                    aria-label="Recipients username" aria-describedby="button-addon2">
                <button class="btn btn-info" type="button" id="remark'.$student['Roll Number'].'" onclick= Remark("'.$student["Roll Number"].'")>Add Remark</button>
            </div>
            </td>
          
            </tr>
            ';
            }
    }
}
else
{
    
    if(isset($labname) and $labname=="Accounts Section"){        
       $queryStatus = 'SELECT `Roll Number` FROM `nodue_status` WHERE `Roll Number` in (SELECT `Roll Number` FROM `nodue_status` WHERE (`Lab`<>"Accounts Section" and `Status`="Pending")  group by `Roll Number` having count(*)=1 ) AND (`Lab`="Accounts Section" and `Status`="Pending")';
    }
    else if(isset($labname) and $labname=="Principal")
    {
        $queryStatus = 'SELECT `Roll Number` FROM `nodue_status` WHERE `Roll Number` in (SELECT `Roll Number` FROM `nodue_status` WHERE (Lab="Accounts Section" and status="Approved")) and (Lab="Principal" and status="Pending")';
    }
    else{
    $queryStatus = "SELECT `Roll Number` FROM `nodue_status` WHERE `Lab`='$labname' AND `Status`='Pending' ORDER BY `Date` DESC";
    }
    $resultStatus = mysqli_query($con, $queryStatus);
    $count = 0;
    while($data = $resultStatus->fetch_assoc())
    {
        $roll = $data['Roll Number'];
        $queryStudent = "SELECT * FROM `student` WHERE `Roll Number`='$roll'";
        $resultStudent = mysqli_query($con, $queryStudent);  
        $student=mysqli_fetch_assoc($resultStudent);
        $count++;
        if($labname!="Principal"){
            $output .= '
            <tr>
            <td>'.$count.'</td>
            <td>'.$student["Roll Number"].'</td>
            <td class="text-center">'.$student["Name"].'</td>
            <td>'.$student['Sem'].'</td>
            <td>'.$student["Department"].'</td>
            <td>
            <button type="button" class="btn btn-success" id="accept'.$student["Roll Number"].'" onclick= Accept("'.$student["Roll Number"].'")>Accept</button>
            <button type="button" class="btn btn-danger" id="hold'.$student["Roll Number"].'" onclick= Hold("'.$student["Roll Number"].'")>Hold</button>
            
            <div class="input-group mb-3 my-3" id="addRemark'.$student['Roll Number'].'" style="display:none">
                <input type="text" class="form-control" placeholder="Send a Remark to student" id="remarks'.$student['Roll Number'].'" 
                    aria-label="Recipients username" aria-describedby="button-addon2">
                <button class="btn btn-info" type="button" id="remark'.$student['Roll Number'].'" onclick= Remark("'.$student["Roll Number"].'")>Add Remark</button>
            </div>
            </td>
            <td><a href="viewhandler.php?RollNumber='.$student["Roll Number"].'"><button type="button" class="btn btn-success" id="view'.$student["Roll Number"].'" onclick= view("'.$student["Roll Number"].'")>View Receipt</button></a></td>
           
            </tr>
            ';
            }
            else{
                $output .= '
            <tr>
            <td>'.$count.'</td>
            <td>'.$student["Roll Number"].'</td>
            <td class="text-center">'.$student["Name"].'</td>
            <td>'.$student['Sem'].'</td>
            <td>'.$student["Department"].'</td>
            <td>
            <button type="button" class="btn btn-success" id="accept'.$student["Roll Number"].'" onclick= Accept("'.$student["Roll Number"].'")>Accept</button>
            <button type="button" class="btn btn-danger" id="hold'.$student["Roll Number"].'" onclick= Hold("'.$student["Roll Number"].'")>Hold</button>
            
            <div class="input-group mb-3 my-3" id="addRemark'.$student['Roll Number'].'" style="display:none">
                <input type="text" class="form-control" placeholder="Send a Remark to student" id="remarks'.$student['Roll Number'].'" 
                    aria-label="Recipients username" aria-describedby="button-addon2">
                <button class="btn btn-info" type="button" id="remark'.$student['Roll Number'].'" onclick= Remark("'.$student["Roll Number"].'")>Add Remark</button>
            </div>
            </td>
          
            </tr>
            ';
            }
    }
}
$output .='</tbody>
</table>';
echo $output;
?>
<style>
    @media screen and (max-width: 1035px){
        .btn{
            margin-top: 0.5rem;
        }
    }
    
</style>
