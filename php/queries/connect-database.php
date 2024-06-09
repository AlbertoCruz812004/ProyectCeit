<?php

function connect_to_supabase()
{
    $host = 'host=aws-0-us-west-1.pooler.supabase.com';
    $port = '6543';
    $dbname = 'dbname=postgres';
    $user = 'user=postgres.fxomtvykfqicinoxtmjp';
    $password = 'febrero2@81';

    $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

    if (!$conn) {
        die("Error al conectar a la base de datos: " . pg_last_error());
    }

    return $conn;
}
