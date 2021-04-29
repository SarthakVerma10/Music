<?php
    $mysqli = new mysqli("db4free.net", "cistbuzz", "Kake_verma10", "playlist_at_mood", 3306);
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
        require("./Components/AddCatForm.php");
    }
?>