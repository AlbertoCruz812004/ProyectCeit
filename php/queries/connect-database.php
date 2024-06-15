<?php

function connectToDatabase()
{
    $host = "host=aws-0-us-west-1.pooler.supabase.com";
    $dbName = "postgres";
    $userName = "postgres.fxomtvykfqicinoxtmjp";
    $password = "febrero2@81";

    try {
        $conn = new PDO("pgslq:host= $host; dbname=$dbName; $userName, $password");
    } catch (\Throwable $th) {
    }
}
