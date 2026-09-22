<?php

require_once 'DBConn.php';

$db_conn = new DBConn();
$conn = $db_conn->get_connection();

$result = $conn->query('SELECT * FROM user');

if ($result) {
    echo 'No of Rows: ' . $result->num_rows;
} else {
    echo 'Query error: ' . $conn->error;
}
