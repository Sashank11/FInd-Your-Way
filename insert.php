<?php
$username= $_POST['username'];
$email= $_POST['email'];
$password= $_POST['password'];
if(!empty($username) || !empty($password) || !empty($email))
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
        $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
        $Insert = "INSERT INTO register(username, email, password) values(?, ?, ?)";
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
            $stmt->bind_param("sss",$username, $email, $password);
            if ($stmt->execute()) {
                header("Location: login.html");
            }
            else {
                echo $stmt->error;
            }
        }
        else {
            echo "Someone already registers using this email.";
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
