<?php
    $cat  = $_POST['catName'];
    echo $cat;
    $mysqli = new mysqli("db4free.net", "cistbuzz", "Kake_verma10", "playlist_at_mood", 3306);
    $mysqli->query("DELETE FROM SONGS WHERE CATEGORY='$cat'");
    $mysqli->query("DELETE FROM CATEGORY WHERE name='$cat'");
    
?>
