<?php
    $name = $_POST["song"];
    $category = explode("/",$_POST["category"]);
    $mysqli = new mysqli("localhost", "root", "1234", "music", 3306);
    $mysqli->query("INSERT INTO SONGS(SNAME, CATEGORY) VALUES ('$name','$category[1]')");
    echo $name;