<?php
$filename = $_POST['filename'];//index.php
$content = $_POST['content'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Modifie Post</h2>
    <article>
        <form action="process-modif.php" method="POST">
            <label for="title">Title : </label>
            <input id="title" name="newtitle" type="text" value="<?php echo basename($filename, ".txt"); ?>">
            </br>
            <label for="content">Content : </label>
            <textarea id="content" name="newcontent" cols="30" rows="10" placeholder="Enter Texte"><?php echo $content; ?></textarea>
            <input type="hidden" name='filename' value='<?php echo $filename ?>'>
            <input type="submit" value="modifie">
        </form>
    </article>
</body>
</html>