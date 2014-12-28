<?php
$sql = ('SELECT * FROM test_table');

$conn = new mysqli('127.0.0.1', 'root', '', 'online_shopping');
//check connection
if ($conn->connect_error) {
    die ('Connection error : ' . $conn->connect_error);
}
$result = $conn->query($sql);
return $result;
$conn->close();

