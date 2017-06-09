<?php
    $title = $_POST["title"];
    $content = $_POST["content"];
    echo "<p>$title $content</p>";

    if(!is_dir("post")){
        mkdir("post");
    }

    $file = fopen("post/" . $title . ".txt", "w");
    fwrite($file, $content);
    fclose($file);
    echo "fichier cree";
?>