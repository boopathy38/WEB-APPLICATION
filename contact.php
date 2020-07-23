<?php
$name= filter_input(INPUT_POST,'name');
$email= filter_input(INPUT_POST,'email');
$phone= filter_input(INPUT_POST,'phone');
$message= filter_input(INPUT_POST,'message');
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="contact";


$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO contact (name, email, phone, message)
values ('$name','$email','$phone','$message')";

if (mysqli_multi_query($conn, $sql)) {
    header("Location: contact.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);







 ?>
