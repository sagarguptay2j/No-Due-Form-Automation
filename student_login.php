<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" media="all" href="../SDG-INTERNSHIP-NO-DUE-FORM/css_files/student_login.css">
    <script src="https://kit.fontawesome.com/f935d9d29d.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="full">
        <div class="box">
            <div class="header"> Student Login</div>
            <div class="box2">
                <ul>
                    <form action="student_login_form_handler.php" method="post">
                        <div class="merge">
                            <i class="fas fa-user"></i>
                            <input type="text" name="username" id="username" placeholder="Username">
                        </div>

                        <div class="merge">
                            <i class="fas fa-key"></i><input type="password" name="password" id="password"
                                placeholder="Password">
                        </div>
                        <input type="submit" id="btn" value="Login">
                    </form>
                    <div class="div">
                        <p class="new">New User ?<a href="new_student.php" class="register">Register</a> </p>

                    </div>
                </ul>
            </div>
        </div>
    </div>


</body>

</html>