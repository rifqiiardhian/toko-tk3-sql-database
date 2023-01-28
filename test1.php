<?php
    include 'connection1.php';

    if ($db) {
        $response['status'] = 200;
        $response['success'] = 1;
        $response['message'] = 'Connected to DB!';
        echo json_encode($response);
    }
?>