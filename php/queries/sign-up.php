<?php
// login.php
include 'db.php';

function verify_user($matricula, $password)
{
    $conn = connect_to_supabase();

    $matricula = pg_escape_string($conn, $matricula);
    $password = pg_escape_string($conn, $password);

    $query = "SELECT person.name FROM student INNER JOIN person ON person.curp = student.curp WHERE matricula = '$matricula' AND password = '$password'";
    $result = pg_query($conn, $query);

    if (pg_num_rows($result) > 0) {
        header('Location: next_page.php');
        exit();
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }

    pg_close($conn);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $matricula = $_POST['matricula'];
    $password = $_POST['password'];
    verify_user($matricula, $password);
}
