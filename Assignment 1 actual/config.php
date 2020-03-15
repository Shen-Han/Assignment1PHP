<?php

$dsn='mysql:host=localhost:80;dbname=my_guitar_shop1';
$username='mgs_user';
$password='pa55word';

        try {
            $db = new PDO($dsn, $username, $password);
            echo'<p> You are connected to the database!</p>';
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo"<p>An error occured while connecting to the database:$error_message</p>";
            include('database_error.php');
            exit();
        }
?>


