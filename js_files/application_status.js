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
//load_data_hold();


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
    var url = "update_status.php?rollnumber=" + rollnumber + "&remarks=" + remarks + "&lab=" + '<?php echo $labname?>';
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            location.reload();
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();

}

function Accept(rollnumber) {
    console.log(rollnumber)
}
