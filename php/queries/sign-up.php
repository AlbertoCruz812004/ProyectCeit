<?php
// login.php
include 'connect-database.php';

function verify_user($matricula, $password)
{
    $conn = connectToDatabase();

    $usuario = $_POST[$matricula];
    $pass = $_POST[$password];

    $query = "SELECT * FROM student WHERE matricula=:$usuario AND password=:$pass";
    $register = $conn2->prepare($query);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $matricula = $_POST['matricula'];
    $password = $_POST['password'];
    verify_user($matricula, $password);
}
