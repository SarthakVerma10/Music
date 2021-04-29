<?php
    $cat  = $_POST['catName'];
    echo $cat;
    $mysqli = new mysqli("sql6.freemysqlhosting.net", "sql6409164", "u7CTsh4XMN", "sql6409164", 3306);
    $mysqli->query("DELETE FROM SONGS WHERE CATEGORY='$cat'");
    $mysqli->query("DELETE FROM CATEGORY WHERE name='$cat'");
    
?>
