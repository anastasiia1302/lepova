<?php
include ('config.php');

// запрос
$query='Select * from clients.clients';
$output = mysqli_query ($connection, $query);

// вывод
while ($line=mysqli_fetch_row($output)) {
var_dump($line);
 }
 ?>