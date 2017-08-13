<?php
    $files = scandir("post");
    $posts = [];
    foreach($files as $f){
        if(is_dir($f)){
            continue;
        }
        $posts[] = $f;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listage des posts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class='fx fxrow talignC margin0'>
    <h1>Listing new posts :</h1>
    <a class='fx fxrow talignC' href="http://localhost/Php/blog2/create.html"> new Post</a>
    <?php foreach($posts as $post) { ?>
    <article class='fx fxrow talignC marginAuto width80 marginTop2'>   
        <h2 class='margin0'><?php echo basename($post, ".txt"); ?></h2>
        <p class='margin0 paddingBottom1'><?php echo file_get_contents("post/".$post); ?></p>
        <div class='fx jsContentC'>
            <form action="delete-post.php" method="POST"><!-- Delete -->
                <input type="hidden" name="filename" value="<?php echo $post; ?>">
                <input type="submit" value="Delete">
            </form>
            </br>
            <form action="modif-post.php" method="POST"><!-- Modifie -->
                <input type="hidden" name="filename" value="<?php echo $post; ?>">
                <input type="hidden" name="content" value="<?php echo file_get_contents("post/".$post); ?>">
                <input class='marginLeft2' type="submit" value="Modifie">
            </form>
        </div>
    </article>
    <?php } ?>
</body>
</html>