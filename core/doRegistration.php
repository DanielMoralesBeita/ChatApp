<?php 
include "config.php";
$username	= 	$_POST['username'];
$email 		=	$_POST['email'];
$password	=	$_POST['password'];

$sql = "INSERT INTO users (username, email, password)
VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 ?>