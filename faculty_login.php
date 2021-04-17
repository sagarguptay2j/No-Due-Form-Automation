<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Login</title>
    <link rel="stylesheet" href="../SDG-INTERNSHIP-NO-DUE-FORM/css_files/faculty_login.css">
    <script src="https://kit.fontawesome.com/f935d9d29d.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="full">
        <div class="container">
            <h1>Faculty Login</h1>
            <form action="faculty_login_form_handler.php" method="POST">
                <div class="merge">
                    <i class="fas fa-user"></i>
                    <input type="text" name="labid" placeholder="Lab Id">
                </div>
                <div class="merge">
                    <i class="fas fa-key"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="login-btn">Login</button>
            </form>
        </div>
    </div>

</body>

</html>