<?php
    $title = $_POST["title"];
    $content = $_POST["content"];

    if(!is_dir("post")){
        mkdir("post");
    }

    $file = fopen("post/" . $title . ".txt", "w");
    fwrite($file, $content);
    fclose($file);
    
    header("location: index.php");
    
?>