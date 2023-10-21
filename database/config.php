<?php
$conn = new mysqli("localhost","root", "", "oop");

$sql = "SELECT * FROM student";
$result = $conn->query($sql);
echo $result->num_rows;
$row = $result->fetch_assoc();
