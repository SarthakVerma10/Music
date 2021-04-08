<?php
    $mysqli = new mysqli("localhost", "root", "1234", "music", 3306);
    require("./Components/base.php");

    if ($_SERVER['REQUEST_URI'] == "/") {
        require("./Components/Dashboard.php");
    }

    $category = $mysqli->query("SELECT name FROM CATEGORY");

    foreach ($category as $row) {

        if ($_SERVER["REQUEST_URI"] == "/" . $row['name']) {
            require("./Components/Songs.php");
        }
    }

    if ($_SERVER['REQUEST_URI'] == "/addcategory") {
        require("./Components/add-cat-form.php");
    }
?>