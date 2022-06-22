<?php

DEFINE("DB_SERVERNAME","localhost");
DEFINE("DB_USERNAME","root");
DEFINE("DB_PASSWORD","root");
DEFINE("DB_NAME","db_university");
DEFINE("DB_PORT",8889);

$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
if($conn && $conn->connect_error){
    echo "ERROR" . $conn->connect_error;
    die();
}
?>