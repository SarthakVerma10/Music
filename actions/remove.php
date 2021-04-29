<?php
    $song  = $_POST['songName'];
    echo $song;
    $mysqli = new mysqli("sql6.freemysqlhosting.net", "sql6409164", "u7CTsh4XMN", "sql6409164", 3306);
    $mysqli->query("DELETE FROM SONGS WHERE SNAME='$song'");
    
?>

