<?php
    $mysqli = new mysqli("sql6.freemysqlhosting.net", "sql6409164", "u7CTsh4XMN", "sql6409164", 3306);
    require("./Components/base.php");

    if ($_SERVER['REQUEST_URI'] == "/") {
        require("./Components/Dashboard.php");
    }

    $category = $mysqli->query("SELECT name FROM CATEGORY");

    foreach ($category as $row) {
        if ($_SERVER["REQUEST_URI"] == "/" . $row["name"]) {
            require("./Components/Songs.php");
        }

    }

    // foreach ((array) $category as $row) {
    //     if ($_SERVER["REQUEST_URI"] == "/" . $row['name']) {
    //         //require("./Components/Songs.php");
    //         echo $row['name'];
    //     }
    // }

    if ($_SERVER['REQUEST_URI'] == "/addcategory") {
        require("./Components/AddCatForm.php");
    }
?>