<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../SDG-INTERNSHIP-NO-DUE-FORM/css_files/application_status.css" >
    
    
    <!--<script src="./js_files/application_status.js" defer></script>-->

    <title>Application Status</title>

</head>

<body>
<?php
if(isset($_GET['RollNumber'])){
  $RollNumber=$_GET['RollNumber'];
}
?>
<div class="tab-wrapper">
        <div class="tab-content active" data-label="1">
            <div class="table-top">
                <h1>Application Status</h1>

                <?php echo "<a href='printnodueform.php?RollNumber=$RollNumber' ><button type=\"button\" class=\"btn btn-success\" >Print No Due Form</button></a>";
                ?>
            </div>
            <div id="formStatus">
            </div>
        </div>
</div>
<div id="myModal" class="modal" >
            <div class="modal-content">
            <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Modal Header</h2>
            </div>
            <div class="modal-body">
            <p>Some text in the Modal Body</p>
            <p>Some other text...</p>
            </div>
            <div class="modal-footer">
            <h3>Modal Footer</h3>
            </div>
            </div></div>
<script src="https://kit.fontawesome.com/f935d9d29d.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function load_data_status() {
    $.ajax({
        url: "fetch_form_status.php",
        method: "post",
        data: {

        },
        success: function(data) {
            //console.log(data);
            $('#formStatus').html(data);
        }
    });
}
load_data_status();

function Reapply(lab)
{
    lab=lab.replaceAll("_"," ");
    console.log(lab);
    var url = "update_status_reapply.php?&lab=" + lab + "&status="+'Pending';
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            load_data_status();
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}
</script>