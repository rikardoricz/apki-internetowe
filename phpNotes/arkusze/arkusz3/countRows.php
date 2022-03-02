<?php
$countRowsQuery = "SELECT * FROM dane";

$stmt = $conn->prepare($countRowsQuery);
$stmt->execute();
$stmt->store_result();
$countedRows = $stmt->num_rows;
$stmt->close();
?>