<?php
require_once __DIR__ . "/database.php";

$sql = "SELECT * FROM `students`;";
$result = $conn->query($sql);

var_dump($result);

?>