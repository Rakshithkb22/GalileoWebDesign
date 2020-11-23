<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "database01";
try {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$email = $_POST['email'];

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO query (name,email,message)
VALUES ('$name','$email','$message')";
$conn->exec($sql);
echo "New record created successfully";
}
catch(PDOException $e)
{

echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>