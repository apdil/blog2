<?php

    $filename = $_POST['filename'];//podif-post.php
    $newtitle = $_POST['newtitle'];
    $newcontent = $_POST['newcontent'];
    
    $file = fopen("post/" . $filename, "w");
    rename('post/'.$filename, 'post/'.$newtitle.'.txt');
    fwrite($file, $newcontent);
    fclose($file);

    header("location: index.php");

?>