<?php

class Dbh {
    protected function connect() {
        try {
            $username = "root";
            $password = "";
            return new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br>";
            die();
        }
    }
}
