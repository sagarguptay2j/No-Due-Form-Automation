<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <style>
        
        .full{
            background-image: url("images/background1.jpg");
            background-size: cover;
            width:100%!important;
            height:100%!important;
            background-position:center;
            position: absolute;
            margin-top: -8px;
            margin-left: -8px;
        }
    </style> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NODUE REGISTRATION</title>
    <!-- <link rel="stylesheet" type="text/css" media="all" href="css_files/home_page.css"> -->
    <!-- <link rel="stylesheet" type="text/css" media="all" href="css_files/studentRegistration.css"> -->
    <link rel="stylesheet" type="text/css" media="all" href="../SDG-INTERNSHIP-NO-DUE-FORM/css_files/nodue_reg_media.css">
    <script src="https://kit.fontawesome.com/f935d9d29d.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class="full application">
       <div class="container">
       <div class="header">APPLICATION FORM</div>
       <form action="student_nodue_registration_formhandler1.php" method="post">
       <div class="line-new">
               <label class="a" for="">Roll No</label>             
               <input class="b" type="text" name="rollno" id="rollno">
        </div>
       <div class="line-new">
               <label class="a" for="">Semester</label>             
               <input class="b" list="sem" name="sem"  placeholder="Select Semester" required>
  						    <datalist id="sem">
  						  	<option value="1">
  						  	<option value="2">
  						  	<option value="3">
  						  	<option value="4">
  						  	<option value="5">
                            <option value="6">
                            <option value="7">
                            <option value="8">
  						</datalist>
           </div>
           <button class="apply">Apply</button>
           </form>
   </div>
   
</body>
</html>