<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEBUG</title>
</head>

<body>
    <?php
    include('../php/queries/connect-database.php');
    echo connect_to_supabase() != null;

    ?>
</body>

</html>