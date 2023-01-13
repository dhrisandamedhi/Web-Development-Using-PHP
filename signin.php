<?php
    require_once 'dbconnect.php';

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $un =  $_POST['username'];
        $pw =  $_POST['password'];
        $defaultDate=trim(date("d M Y G.i:s"));

        $sql = "SELECT * FROM registration where Username = '$un' and Password = '$pw'";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_num_rows($result);
        if($row == 1)
        {
            session_start();
            $_SESSION['Username'] = $un;

            echo    '<script>
                        alert("Login Successful!");
                        window.location.href="your_post.php";
                    </script>';

        }
        else
        {   
            echo    '<script>
                        alert("Please enter valid username and password");
                        window.location.href="login.php";
                    </script>';
        }
    }

?>
