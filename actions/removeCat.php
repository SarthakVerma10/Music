<?php
    $cat  = $_POST['catName'];
    echo $cat;
    $mysqli = new mysqli("localhost", "root", "1234", "music", 3306);
    $mysqli->query("DELETE FROM SONGS WHERE CATEGORY='$cat'");
    $mysqli->query("DELETE FROM CATEGORY WHERE name='$cat'");
    
?>
