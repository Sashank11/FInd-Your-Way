<?php
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email =$_POST['email'];
$date= $_POST['date'];
$type= $_POST['type'];
    $conn = mysqli_connect("localhost", "root", "", "test");
    if ($conn == false)
    {
        echo "Failed to connect";
    }
    $sqln= "INSERT INTO `reserve`(`fname`, `lname`, `email`, `date`, `type`) VALUES ('$fname','$lname','$email','$date','$type')" ;
    mysqli_query($conn, $sqln);
    header("location: index.html");
?>
