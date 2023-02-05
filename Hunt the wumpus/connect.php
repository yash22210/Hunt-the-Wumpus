<?php

/**
 * Name: Yash Patel Student Number: 000842226
 * File Created Date: Oct 20, 2021
 * Purpose: This file connects to the database
 */
try {
    $dbh = new PDO(
        "mysql:host=localhost;dbname=000842226",
        "000842226",
        "19900805"
    );
} catch (Exception $e) {
    die("ERROR: Couldn't connect. {$e->getMessage()}");
}