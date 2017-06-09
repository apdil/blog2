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
</head>
<body>
    <h1>Listing new posts :</h1>
    <a href="http://localhost/Php/blog2/create.html"> new Post</a>
    <?php foreach($posts as $post) { ?>
    <article>   
        <h2><?php echo basename($post, ".txt");?></h2>
        <p><?php echo file_get_contents("post/".$post); ?></p>
    </article>
    <?php } ?>
</body>
</html>