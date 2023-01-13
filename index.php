<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this-Blog | Home</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" media="screen and (max-width: 970px)" href="css/phoneindex.css?v=<?php echo time(); ?>">
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
                </div>
                <ul id="nav-item">
                    <li><a href="#home">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <?php
                        if(isset($_SESSION['Username']))
                        {?>

                            <li><a href="your_post.php">Your Post</a></li>
                    <?php
                        }
                        else
                        {?>
                            <li><a href="login.php">Your Post</a></li>
                    <?php
                        }
                    ?>
                    
                    <li><a href="index.php">Sign Out</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="home">
        <div class="container-home">
            <div class="para">
                <h2 class="h-sec">Now you can write your blog</h2>
                <p> this-Blog gives you an opportunity to be courageous and write your own blog in this website. In this website you can express your thoughts, visions towards something and express as a blog here. Blogging is a good way to build trust with your target audience through high quality content that they find relevant.
                </p>
            </div>
            <div class="img-home">
                <img src="img/img1.jpg" alt="This is Image">
            </div>
        </div>
    </section>
    
    <section id="blogs">
        <h1 class="h-prime">Blogs</h1>
        <div class="blogs-container">
            <?php
                include 'dbconnect.php';

                $sql = "select * from blogcontent";

                $result = mysqli_query($conn, $sql);

                // $data = mysqli_fetch_array($result);

                while($data = mysqli_fetch_array($result))
                {
            ?>
              
                    <div class="blog-box">
                        <div class="details">
                            <h2> <?php echo $data['Title']; ?> </h2>
                            <p> <?php echo $data['Date_of_Post']; ?> </p>
                        </div>
                        <div class="blog-body">
                            <img src=" <?php echo $data['Image_File']; ?> " alt="Image">
                            <p>
                                <?php echo $data['Content']; ?>
                            </p>
                        </div>
                    </div>
              
            <?php  
                }
            ?>
        </div>
    </section>

    <section id="about">
        <h1 class="h-prime">About</h1>
        <div class="container-about">
            <p>Welcome to the blog of the  Nature of Assam .
                <br> This blog serves as a platform for the nature and the natural hazards community to share news,<br>
                 events, and activities, as well as updates on the latest research. 
                 <br>The blog is run by Rahul, Dhrisanda,Ankur and Roshan. You can contact us via email.</p>
        </div>
    </section>

    <hr>

    <Section id="contact">
        <h1 class="h-prime">Contact</h1>
        <div class="container-contact">
            <div class="contact-box">
                <h2 class="h-third">Contact Us:</h2>
                <li>Roshan Chetry</li>
                <li>Rahul Tayegam</li>
                <li>Dhrisanda Medhi</li>
                <li>Ankurjyoti Rabha</li>
            </div>
            <div class="contact-box">
                <h2 class="h-third">Email Us:</h2>
                <li>roshanchetry5031@gmail.com</li>
                <li>rahultayegam1337@gmail.com</li>
                <li>dhrisandamedhi37@gmail.com</li>
                <li>jankur319@gmail.com</li>
            </div>
        </div>
    </Section>
    
    <footer>
        <p>Copyright &copy; | this-Blog@.com</p>
    </footer>

    <script src="js/menu.js"></script>
</body>

</html>