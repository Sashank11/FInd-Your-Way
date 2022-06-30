<?php
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$dpdate= $_POST['dpdate'];
$ardate= $_POST['ardate'];
$phno= $_POST['phno'];
$package= $_POST['package'];
$guest= $_POST['guest'];
$room= $_POST['room'];
$fee = 0;
if(!empty($fname) || !empty($lname) || !empty($dpdate) || !empty($ardate) || !empty($phno) || !empty($package) || !empty($guest) || !empty($room))
{
    if($package=='paris')
    {
        $fee=100000;
    }
    if($package=='amsterdam')
    {
        $fee=80000;
    }
    if($package=='everestbase')
    {
        $fee=150000;
    }
    if($package=='kathmandu')
    {
        $fee=70000;
    }
    if($package=='maldives')
    {
        $fee=50000;
    }
    if($package=='rara')
    {
        $fee=8000;
    }
    $conn = mysqli_connect("localhost", "root", "", "test");
    if ($conn == false)
    {
        echo "Failed to connect";
    }
    $sqln= "INSERT INTO `package`( `fname`, `Iname`, `dpdate`, `ardate`, `phno`, `package`, `guest`, `room`, `fee`) VALUES ('$fname','$lname','$dpdate','$ardate','$phno','$package','$guest','$room','$fee')" ;
    mysqli_query($conn, $sqln);
    header("location: paymentpackage.html");
}
?>
