<?php
$jj='';
$pss='';
$username = $_POST['username'];
$password = $_POST['password'];
$conn = mysqli_connect("localhost", "root", "", "test");

$sql="select * from register";
$result=mysqli_query($conn, $sql);
$num= mysqli_num_rows($result);
if($num>0)
{
    while( $row=mysqli_fetch_assoc($result))
    {

        if($username==$row['username'])
        {
            $jj=$username;
            $pss=$row['password'];
        //     echo " hello user"
        }    
    }
    if($jj==$username && $pss==$password)
    {
        echo $jj;
        echo $pss;
        header("location: index.html"); 
    }
    else
    {
        
        header("location: login.html");
    }
}

?>