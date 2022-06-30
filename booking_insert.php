<?php
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$dpdate= $_POST['dpdate'];
$ardate= $_POST['ardate'];
$phno= $_POST['phno'];
$hotel= $_POST['hotel'];
$guest= $_POST['numberr'];
$room= $_POST['room'];
$fee = 0;
if(!empty($fname) || !empty($lname) || !empty($dpdate) || !empty($ardate) || !empty($phno) || !empty($hotel) || !empty($guest) || !empty($room))
{
    if($hotel=='yakandyeti')
    {
        $fee=10000;
    }
    if($hotel=='yellow')
    {
        $fee=8000;
    }
    if($hotel=='soaltee')
    {
        $fee=15000;
    }
    if($hotel=='hyatt')
    {
        $fee=15000;
    }
    if($hotel=='annapurna')
    {
        $fee=7000;
    }
    if($hotel=='shanker')
    {
        $fee=6000;
    }
    $conn = mysqli_connect("localhost", "root", "", "test");
    if ($conn == false)
    {
        echo "Failed to connect";
    }
    $sqln= "INSERT INTO `booked`( `fname`, `Iname`, `dpdate`, `ardate`, `phno`, `hotel`, `guest`, `room`, `fee`) VALUES ('$fname','$lname','$dpdate','$ardate','$phno','$hotel','$guest','$room','$fee')" ;
    mysqli_query($conn, $sqln);
    header("location: payment.html");
}
?>
