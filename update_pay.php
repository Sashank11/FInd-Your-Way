<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="update_pay.css">
</head>
<body>

<div>
<?php
$jj='';
$pss='';
$name='';
$final=0;
$dis=0;
$g=1;
$card = $_POST['card'];
$pin = $_POST['pin'];
$voucher = $_POST['vc'];
$uname = $_POST['uname'];
$conn = mysqli_connect("localhost", "root", "", "test");


$sqln="select * from booked";
$resultn=mysqli_query($conn, $sqln);
$numn= mysqli_num_rows($resultn);
if($numn>0)
{
    while( $row=mysqli_fetch_assoc($resultn))
    {

        if($uname==$row['fname'])
        {
            $g=$row['guest'];
            $fee=$row['fee'];
        }    
    }
}


$sqld="select * from discount";
$resultd=mysqli_query($conn, $sqld);
$numd= mysqli_num_rows($resultd);
if($numd>0)
{
    while( $row=mysqli_fetch_assoc($resultd))
    {

        if($voucher==$row['dname'])
        {
            $dis=$row['amount'];
        }    
    }
}
$sql="select * from card";
$result=mysqli_query($conn, $sql);
$num= mysqli_num_rows($result);
if($num>0)
{
    while( $row=mysqli_fetch_assoc($result))
    {

        if($card==$row['card'])
        {
            $jj=$card;
            $pss=$row['pin'];

            $amt=$row['amount'];
        }    
    }
    if($jj==$card && $pss==$pin)
    {
        $final=($g*$fee)-$dis;
        $rem=$amt-$final;
        $upd="UPDATE card ". "SET amount = $rem "."WHERE card = $jj";
        mysqli_query($conn, $upd);
        echo "<h2>YOUR PAYMENT HAS BEEN RECEIVED!!</h2>";  
        echo "<h3>TOTAL AMOUNT PAID: </h3>";
        echo $final;  
        echo "<br>";
        echo "";
        if($dis>0)
        {
        echo "<h3>CONGRATULATIONS! YOU HAVE RECEIVED AN ADDITIONAL DISCOUNT OF RS</h3>";  
        echo $dis;
        echo "<h3>USING THE COUPON CODE </h3>";
        echo $voucher;
        }
        echo "";
            
    }
    else
    {
        echo "enter correct info";
    }
}
else
{
    echo "enter correct information";
}

?>
<br><br><br>
<form action="index.html">
<button class="btn">GO TO HOMEPAGE</button>
</form>
</div>
</body>
</html>