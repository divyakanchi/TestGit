<?php
require 'connection.php';
$sql = "UPDATE MyStudents SET lastname='Pamper' WHERE id=2";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();

?>