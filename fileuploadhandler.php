<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "no_due_form"; 
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}
if(isset($_POST["submit"])){
    $title=$_POST["title"];
    $username = $_SESSION['login_user']; 
    $rollno = $_POST['rollno'];
    $labid = $_POST['labid'] ;
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'Documents/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary Documents directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    }  else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql="delete from fileup where `Roll Number`='$rollno'";
            if(mysqli_query($con,$sql)){
           }else{}
            $sql="insert into fileup values('$rollno','$labid','$title','$filename')";
            if (mysqli_query($con, $sql)) {
                echo"File Successfully Uploaded";
                header("location:view_form_status.php?RollNumber='.$rollno.'");
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
?>