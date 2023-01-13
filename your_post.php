<!-- <?php 
include_once "head.php";
?> -->

<?php
    session_start();

    if(!isset($_SESSION['Username']))
    {
        header('location: login.php');
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this-Blog</title>
    <link rel="stylesheet" href="css/your_post.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" media="screen and (max-width: 400px)" href="css/phoneyourpost.css?v=<?php echo time(); ?>">
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
                    <li><a href="your_post.php">Your Post</a></li>
                    <li><a href="signout.php">Sign Out</a></li>
                    </li>
                </ul>
            </nav>
        </div>
        <div style="color: white; font-size: 20px;">
        <?php
            // session_start();
            echo "Welcome ";
            echo $_SESSION['Username'];
        ?>
        </div>
    </header>
    

    <div class="container">
        <div class="text-center" id="text-center">
            <a href="create.php" class="btn2"><b>+Create a new post<b></a>
        </div>
    </div>


        <script src="js/menu.js"></script>
</body>

</html>