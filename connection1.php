<?php
    // localhost
    // $server = "localhost";
    // $user = "root";
    // $password = "Rifqi@1310";
    // $database = "toko";

    // cloud hosting
    $server = "103.147.154.40";
    $user = "rifqiiar_kelompok3";
    $password = "lEqKW7ckdyf0iec";
    $database = "rifqiiar_toko";

    try {
        $db = mysqli_connect($server, $user, $password, $database);
    } catch (mysqli_sql_exception $e) {
        echo "DB Connection Error: " .$e->getMessage();
        die();
    }
?>