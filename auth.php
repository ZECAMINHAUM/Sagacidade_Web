<?php

session_start();

$login_username = $_POST['user'];
$login_pass = $_POST['pass'];

$SERVERNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = 'root';
$DATABASE = 'learn';

$conn = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);

if($conn->connect_error){
    echo 'deu ruim meu patrao';
}

$query = "SELECT * FROM users WHERE username ='$login_username' AND  pass='$login_pass'";
$apa = $conn->query($query);

if($apa->num_rows > 0){
    session_start();
    header('Location:Main.php');
}
?>