<?php
    $name = $_POST["song"];
    $category = explode("/",$_POST["category"]);
    $mysqli = new mysqli("sql6.freemysqlhosting.net", "sql6409164", "u7CTsh4XMN", "sql6409164", 3306);
    $mysqli->query("INSERT INTO SONGS(SNAME, CATEGORY) VALUES ('$name','$category[1]')");
    echo $name;