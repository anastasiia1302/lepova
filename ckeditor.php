<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="UTF-8">
                <title>Document</title>
                <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        </head>
        <body>
                <div style="height: 300px;">
                        <form method="post" action="save.php">
                                <div>
                                        <label>Title</label>
                                        <input type="text" name="title" required>
                                </div>
                                <div>
                                        <label>Text</label>
                                        <textarea type="text" name="text" rows="5" required></textarea>
                                </div>
                                <div>
                                        <label>Date</label>
                                        <input type="date" name="date" required>
                                </div>
                                <input type="submit" name="submit" value="SEND">
                        </form>
                </div>
                <script>
                CKEDITOR.replace( 'text' );
                </script>
        </body>
</html>