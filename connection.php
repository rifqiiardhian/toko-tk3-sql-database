<?php
    class db {
        // localhost
        // private $server = "localhost";
        // private $username = "root";
        // private $password = "Rifqi@1310";
        // private $database = "toko";

        // cloud hosting
        private $server = "103.147.154.40";
        private $username = "rifqiiar_kelompok3";
        private $password = "lEqKW7ckdyf0iec";
        private $database = "rifqiiar_toko";

        function connect() {
            try {
                $host = new PDO('mysql:host=' . $this->server . ';dbname='. $this->database, $this->username, $this->password);
                
                $host->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                return $host;

            } catch (PDOException $e) {
                echo "DB Connection Error: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }

    $obj = new db();
    $db = $obj->connect();
?>