<?php
include 'config.php';

// var_dump($_POST["title"]);

$title = trim($_POST["title"]);
$text = mysqli_real_escape_string($connection, $_POST["editor1"]);
$date = date("d M, Y H:i:s");

$query="INSERT INTO editor(title,text,date) VALUES ('".$title."','".$text."','".$date."')";
$output=mysqli_query($connection, $query);

echo "статья".$title."успешно добавлена.";
?>
