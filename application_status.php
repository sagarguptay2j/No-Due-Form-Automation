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
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "no_due_form";                        
    $con = mysqli_connect($host, $user, $password, $db_name);
    session_start();
    $labid = $_SESSION['faculty_login'];
    $queryLab = "SELECT `Lab` FROM `labs` WHERE `LabId`='$labid'";
    $resultLab = mysqli_query($con, $queryLab);
    $lab = mysqli_fetch_assoc($resultLab);
    $labname = $lab['Lab'];
    ?>
    <div class="page-top">
    <h1 class="page-header">Application Status</h1>
    <div class="tab-selection">
        <button class="tablinks active" data-label="1">New Applications</button>
        <button class="tablinks" data-label="2">On Hold</button>
        <button class="tablinks" data-label="3">History</button>
    </div>
    <div class="tab-wrapper">
        <div class="tab-content active" data-label="1">
            <div class="table-top">
                <h1>New Applications</h1>
                <div class="searchdiv">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" name="searchbar" id="searchpending" placeholder="Search" />
                </div>
            </div>
            <div id="pendingApproves">

            </div>
        </div>
        </div>
        <div class="tab-content" data-label="2">
            <div class="table-top">
                <h1>Applications on Hold</h1>
                <div class="searchdiv">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" name="searchbar" id="searchhold" placeholder="Search" />
                </div>
            </div>
            <div id="holdApproves">

            </div>
        </div>
        <div class="tab-content" data-label="3">
            <div class="table-top">
                <h1>Applications Approved</h1>
                <div class="searchdiv">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" name="searchbar" id="searchapproved" placeholder="Search" />
                </div>
            </div>
            <div id="approved">

            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/f935d9d29d.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
let tablinks = Array.from(document.querySelectorAll(".tablinks"));
let tabcontents = Array.from(document.querySelectorAll(".tab-content"));

console.log("hello")

tablinks.map(tablink=>{
    tablink.addEventListener("click", linkClickHandler)
});

function linkClickHandler(e){

   document.querySelector(".tablinks.active").classList.toggle("active");
    e.target.classList.toggle("active");
    let dataLabel = e.target.getAttribute("data-label");
    console.log(dataLabel)
    if(dataLabel=="1")
    {
        load_data_pending();
    }
    else if(dataLabel=="2")
    {
        load_data_hold();
    }
    else if(dataLabel=="3")
    {
        console.log(dataLabel)
        load_data_approved();
    }
    document.querySelector(".tab-content.active").classList.toggle("active");
    let div = document.querySelector(`.tab-content[data-label="${dataLabel}"]`);
    div.classList.toggle("active");
}

function load_data_pending(query) {
    console.log(query);
    $.ajax({
        url: "fetch_pending.php",
        method: "post",
        data: {
            query: query
        },
        success: function(data) {
            $('#pendingApproves').html(data);
        }
    });
}

$('#searchpending').keyup(function() {
    var search = $(this).val();
    if (search != '') {
        load_data_pending(search);
    } else {
        load_data_pending();
    }
});
load_data_pending();

function load_data_hold(query) {
    console.log(query);
    $.ajax({
        url: "fetch_hold.php",
        method: "post",
        data: {
            query: query
        },
        success: function(data) {
            $('#holdApproves').html(data);
        }
    });
}

$('#searchhold').keyup(function() {
    var search = $(this).val();
    if (search != '') {
        load_data_hold(search);
    } else {
        load_data_hold();
    }
});

function load_data_approved(query) {
    console.log(query);
    $.ajax({
        url: "fetch_approved.php",
        method: "post",
        data: {
            query: query
        },
        success: function(data) {
            console.log(data);
            $('#approved').html(data);
        }
    });
}

$('#searchapproved').keyup(function() {
    var search = $(this).val();
    if (search != '') {
        load_data_approved(search);
    } else {
        load_data_approved();
    }
});




function Hold(rollnumber) {
    console.log(rollnumber)
    if (document.getElementById(`addRemark${rollnumber}`).style.display == "none") {
        document.getElementById(`addRemark${rollnumber}`).style.display = "flex";
        document.getElementById(`hold${rollnumber}`).innerHTML = "Cancel";
    } else {
        document.getElementById(`addRemark${rollnumber}`).style.display = "none";
        document.getElementById(`hold${rollnumber}`).innerHTML = "Hold";
    }
}



function Remark(rollnumber) {
    //console.log(value);
    remarks = document.getElementById(`remarks${rollnumber}`).value;
    console.log(remarks);
    var url = "update_status.php?rollnumber=" + rollnumber + "&remarks=" + remarks + "&lab=" + '<?php echo $labname?>' + "&status="+'Hold';
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            load_data_pending();
            load_data_hold();
            load_data_approved();
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();

}

function Accept(rollnumber) {
    var url = "update_status.php?rollnumber=" + rollnumber  + "&lab=" + '<?php echo $labname?>' + "&status="+'Approved';
   
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            load_data_pending();
            load_data_hold();
            load_data_approved();
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

</script>

</html>