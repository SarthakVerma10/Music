<?php
    $song  = $_POST['songName'];
    echo $song;
    $mysqli = new mysqli("localhost", "root", "1234", "music", 3306);
    $mysqli->query("DELETE FROM SONGS WHERE SNAME='$song'");
    
?>

