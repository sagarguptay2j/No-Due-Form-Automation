<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT REGISTRATION</title>
    <link rel="stylesheet" type="text/css" media="all" href="../SDG-INTERNSHIP-NO-DUE-FORM/css_files/studentRegistration.css">
    <link rel="stylesheet" type="text/css" media="all" href="./css_files/studentreg_media.css">
    <script src="https://kit.fontawesome.com/f935d9d29d.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="full">
        <div class="header">REGISTRATION FORM</div>
        <form action="new_student_formhandler.php" method="post">
            <div class="line">
                <label for="firstname" class="a">First Name </label>
                <input type="text" name="firstname" id="firstname">
                <label for="middlename" class='hide'>Middle Name </label>
                <input type="text" name="middlename" id="middlename" class='hide'>
                <label for="lastname" class='hide'>Last Name </label>
                <input type="text" name="lastname" id="lastname" class='hide'>
            </div>
            <!-- Adding for responsive design -->
            <div class="line1 show">
            <label for="middlename">Middle Name </label>
            <input type="text" name="middlename" id="middlename">
            </div>
            <div class="line show">
            <label for="lastname">Last Name </label>
            <input type="text" name="lastname" id="lastname">
            </div>
            <!-- End -->
            <div class="line1">
                <label class="a" for="rollno">Roll No</label>
                <input class="b" type="text" name="rollno" id="rollno">
            </div>
            <div class="line">
                <label class="a" for="departmentlist">Department</label>
                <input class="b" list="department" name="department" id="departmentlist" placeholder="Select Department"
                    required>
                <datalist id="department">
                    <option value="Computer">
                    <option value="Electronics">
                    <option value="Instrumentation">
                    <option value="Information Technology">
                    <option value="Electronics and Telecommunication">
                </datalist>
            </div>
            <div class="line1">
                <label class="a" for="email">Email Id</label>
                <input class="b" type="text" name="email" id="email">
            </div>
            <div class="line">
                <label class="a" for="class">Class</label>
                <input class="b" type="text" name="class" id="class">
            </div>
            <div class="line1">
                <label class="a" for="sem-list">Semester</label>
                <input class="b" id="sem-list" list="sem" name="sem" placeholder="Select Semester" required>
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
            <div class="line">
                <label class="a" for="mobileno">Mobile No</label>
                <input class="b" type="int" name="mobileno" id="mobileno">
            </div>
            <div class="line1">
                <label class="a" for="username">Username</label>
                <input class="b" type="text" name="username" id="username">
            </div>
            <div class="line">
                <label class="a" for="password">Password</label>
                <input class="b" type="password" name="password" id="password">
            </div>
            <button class="register">Register</button>
        </form>
    </div>

</body>

</html>