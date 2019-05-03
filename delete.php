<?php
require 'connection.php';
// sql to delete a record
$sql = "DELETE FROM MyStudents WHERE id=8";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}

$con->close();
?>