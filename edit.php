<?php
include 'config.php';
?>
<?php
//проверка
if (empty($_GET['id'])) {
	die('Цель не была выбрана!');
} else {
	$id = $_GET['id'];
//запрос
$request="SELECT * FROM articles WHERE id='$id'";
$output=mysqli_query($connection, $request);
$line=mysqli_fetch_assoc($output);
}
//редактировать запрос
if (!empty($_POST['title'])) {
$title=htmlspecialchars(trim($_POST['title']));
$text=htmlspecialchars(trim($_POST['text']));
$date=htmlspecialchars(trim($_POST['date']));
$edit="UPDATE articles
	SET title='".$title."',
	text='$text',
	date='$date'
	WHERE id='$id'";
$edit_db=mysqli_query($connection, $edit);
	if($edit_db) {
	echo "успешно отредактировано, перенаправление <a href=\"content.php\"> назад </a>";
	die();
	} else {
	echo "какая-то ерунда";
	}

}


?>
<div style="height:300px;">
<form method="post">
<div>
<label>Title</label>
<textarea type="text" name="title" required>
<?php echo $line['title'];?></textarea>
</div>
<div>
<label>Text</label>
<textarea type="text" name="text" required>
<?php echo $line['text'];?></textarea>
</div>
<div>
<label>Date</label>
<input type="date" name="date"
value="<?php echo $line['date'];?>" required>
</div>
<input type="submit" name="submit" value="Редактировать">
</form>
</div>
