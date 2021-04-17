<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" media="all" href="../SDG-INTERNSHIP-NO-DUE-FORM/css_files/fileupload.css">
  <title>Document</title>
</head>

<body>

  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <h2 style="text-align:center;">Upload Reciept</h2>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" action="fileuploadhandler.php">

          <div class="spacing">
            <label>Roll No [Caps]</label>
            <input style="width:30%;" type="text" name="rollno" class="rollnos">
          </div>
          <!-- <br> -->
          <div class="spacing">
            <label>Title</label>
            <span class="title"><input style="width:40%;" type="text" name="title"></span>
          </div>
          <!-- <br> -->
          <div class="spacing">

            <label>Lab Name</label>
            <select class="select" name="labid" placeholder="Select Option">
              <option value="">Select Option</option>
              <!-- <option value=Data Structure Lab></option> -->
              <option value="517">Data Structure Lab</option>
              <option value="519">Programming Lab</option>
              <option value="518">Object Oriented Lab</option>
              <option value="101-A">Student Section</option>
              <option value="101-B">Accounts Section</option>
              <option value="B03">Store</option>
              <option value="312">Library</option>
              <option value="B-007">Basic Workshop</option>
              <option value="008">Electrical Lab</option>
              <option value="012">Drawing</option>
              <option value="013">Engineering Mechanics</option>
              <option value="002">Chemistry Lab</option>
              <option value="113">Physics Lab</option>
              <option value="212">Computer Centre</option>
              <option value="513">Project Lab</option>
              <option value="516">Network Security Lab</option>
              <option value="520">Data Processing Lab</option>
              <option value="521">Digital Forensic Lab</option>
              <option value="522">Wireless Computing Lab</option>
              <option value="012-B">e-Yantra</option>
              <option value="501-A">PG Laboratory</option>
              <option value=null>Department Library</option>
              <option value="512">Training & Placement</option>
              </select>
          </div>
          <!-- <input type="submit" name="submit"> -->
          <!-- <br><br> -->
          <div style="height:30px;" class="upload spacing">
            <label>File Upload [Only PDF]</label>
            <input class="file" type="File" name="myfile">
          </div>
       
      </div>
      <div class="submit">
        <input type="submit" name="submit"  class="submit-btn">
      </div>
         </form>
      <!-- <br> -->
      <div class="modal-footer" style="top:50%;">
        <!-- <h3 style="text-align:center;"></h3> -->
      </div>
    </div>



  </div>
</body>

</html>
