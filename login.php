

<?php
    session_start();

    // if(!isset($_SESSION['Username']))
    // {
    //     header('location: login.php');
    // }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this-Blog</title>
    <link rel="stylesheet" href="css/loginstyle.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" media="screen and (max-width: 800px)" href="css/phonelogin.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Bree+Serif&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div class="intro">
            <h1>this-Blog</h1>
            <p>Welcome to this-Blog</p>
        </div>
        <hr>
        <div class="nav-box">
            <nav class="navbar">
                <div class="menu" onclick="myFunction(this)">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <ul id="nav-item">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="login.php">Your Post</a></li>
                    <li><a href="login.php">Sign Out</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="login">
        <div class="container-log">
            <div class="sign-in">
                <h1 class="prime-sign">Sign In</h1>
                <form name="myForm" action="signin.php" onsubmit="return signinForm()" method="POST">
                    <div class="form-group-sign-in">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="iuser">
                    </div>
                    <div class="form-group-sign-in">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="ipass">
                    </div>
                    <dv class="form-group-sign-in btn-in">
                        <button type="submit">Sign In</button>
                    </dv>
                </form>
            </div>
            <div class="sign-up">
                <div class="box-sign-up">
                    <h1 class="prime-sign">Welcome To Login</h1>
                    <p>Don't have an account?</p>
                    <a href="signup.php">Sign Up</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>Copyright &copy; | this-Blog@.com</p>
    </footer>

    <script src="js/menu.js"></script>
    <script src="js/signin.js"></script>
</body>

</html>