

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
    <link rel="stylesheet" href="css/create.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" media="screen and (max-width: 630px)" href="css/phonecreate.css?v=<?php echo time(); ?>">
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
                    <li><a href="create.php">Your Post</a></li>
                    <li><a href="signout.php">Sign Out</a></li>
                </ul>
            </nav>
        </div>
        <div style="color: white; font-size: 20px;">
        <?php
            
            echo "Welcome ";
            echo $_SESSION['Username'];
        ?>
        </div>
    </header>

    <section id="create-post">
        <div class="container">
            <h2>Write your post</h2>
            <form name="myForm" action="upload.php" method="POST" enctype="multipart/form-data" onsubmit="return contentValid()">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Blog Title">
                </div>
                <div class="form-group">
                    <label for="content">content</label>
                    <textarea name="content" id="content" rows="8" cols="40"
                        placeholder="Write your content"></textarea>
                </div>
                <div class="form-group image">
                    <label for="uploadfile">Choose Image To Upload:</label>
                    <input type="file" name="uploadfile" id="uploadfile">
                </div>
                <div class="form-group btn">
                    <button type="submit" name="submit">Add Post</button>
                </div>


            </form>
        </div>
    </section>


    <script src="js/menu.js"></script>
    <script src="js/content.js"></script>
</body>

</html>