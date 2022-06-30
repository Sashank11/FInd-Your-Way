<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="contact.css">
</head>
<body>

<div>
<?php
$name= $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$subject= $_POST['subject'];
$message= $_POST['message'];
if(!empty($name) || !empty($email) || !empty($number))
{
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName="test";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    if ($conn->connect_error) {
        die('Could not connect to the database.');
    }
    else {
        $Select = "SELECT email FROM contact WHERE email = ? LIMIT 1";
        $Insert = "INSERT INTO contact(name, email, number,subject,message) values(?, ?, ?,?,?)";
        $stmt = $conn->prepare($Select);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($resultEmail);
        $stmt->store_result();
        $stmt->fetch();
        $rnum = $stmt->num_rows;
        if ($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("sssss",$name, $email, $number,$subject,$message);
            if ($stmt->execute()) {
                echo "<h2>Thank you for reaching out to us. We will contact you soon</h2>";
                echo "";
                echo "";
            }
            else {
                echo $stmt->error;
            }
        }
        else {
            header("location: index.html");
        }
        $stmt->close();
        $conn->close();
    }
}
else {
    echo "All field are required.";
    die();
}
?>

<form action="index.html">
<button class="btn">GO TO HOMEPAGE</button>
</form>
</div>
</body>
</html>