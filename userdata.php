
<?php

if(isset($_POST['btn1'])){

    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_message = $_POST['message'];

    $con = mysqli_connect("localhost", "root" , "" , "portfolio");  
    $query = "INSERT INTO `user-data` (name , email , message)
              VALUES ('$user_name', '$user_email', '$user_message')";

    $result = mysqli_query($con, $query);

    mysqli_close($con);


    header("Location: http://localhost/portfolio/index.php");
}

?>