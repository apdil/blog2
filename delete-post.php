<?php
    $filename = $_POST["filename"];
    unlink("post/".$filename);
    header("location: index.php");
?>