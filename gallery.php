<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this-Blog</title>
    <link rel="stylesheet" href="css/gallery_css.css?v=<?php echo time(); ?>">
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
                    <li><a href="gallery.php">Sign Out</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <h1>Photo Gallery</h1>
        <hr>
        <div class="container-gallery">
            <div class="box"><img src="img/flood1.jpg"><b></b></div>
            <div class="box"><img src="img/flood2.jpg"><b></b></div>
            <div class="box"><img src="img/flood3.jpg"></div>
            <div class="box"><img src="img/flood4.jpg"></div>
            <div class="box"><img src="img/flood5.jpg"></div>
            <div class="box"><img src="img/flood6.jpg"></div>
            <div class="box"><img src="img/flood7.jpg"></div>
            <div class="box"><img src="img/flood8.jpg"></div>

            <?php
                include 'dbconnect.php';

                $sql = "select * from blogcontent";

                $result = mysqli_query($conn, $sql);

                // $data = mysqli_fetch_array($result);

                while($data = mysqli_fetch_array($result))
                {
            ?>

                <div class="box">
                    <img src=" <?php echo $data['Image_File']; ?> ">
                </div>


            <?php  
                }
            ?>

        </div>
    </main>
  

    <script src="js/menu.js"></script>
</body>

</html>