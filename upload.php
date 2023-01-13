<?php

include_once 'dbconnect.php';

if(isset($_POST['submit']))
{
  $title = $_POST['title'];
  $content = $_POST['content'];
  $file = $_FILES['uploadfile'];
  $defaultDate = trim(date("Y M d"));

  // print_r($file);

  $filename = $file['name'];
  $filepath = $file['tmp_name'];
  $fileerror = $file['error'];

  if($fileerror == 0)
  {
    $destfile = 'uploads/'.$filename;
    // echo "$destfile";

    move_uploaded_file($filepath, $destfile);

    $sql = "INSERT INTO blogcontent(Title, Content, Image_File, Date_of_Post) VALUES ('$title', '$content', '$destfile', now())";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
      echo  '<script>
                alert("Data are uploaded Successfully!");
                window.location.href="create.php";
            </script>';
    }
    else
    {
      echo  '<script>
                alert("Data are not Uploaded!");
                window.location.href="create.php";
              </script>';
    }
  }
}
else
{
  echo  '<script>
                alert("Sorry! Not successful");
                window.location.href="create.php";
          </script>';
}


?>