<?php
    $name = $_POST["song"];
    $category = explode("/",$_POST["category"]);
    $mysqli = new mysqli("db4free.net", "cistbuzz", "Kake_verma10", "playlist_at_mood", 3306);
    $mysqli->query("INSERT INTO SONGS(SNAME, CATEGORY) VALUES ('$name','$category[1]')");
    echo $name;