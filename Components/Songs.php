<div>
    <div>
        <form method="post">
            <input type="text" name="song" placeholder="song name">
            <button>Add</button>
        </form>
    </div>
    <div>
        <?php
            $category = explode("/", $_SERVER['REQUEST_URI']);
            $result = $mysqli->query("SELECT SNAME FROM SONGS WHERE CATEGORY='$category[1]'");
            foreach ($result as $row) {
                echo $row['SNAME'];
            }
        ?>
    </div>
</div>


<?php
        if ($_POST) {
            $song = $_POST['song'];
            $mysqli->query("INSERT INTO SONGS(SNAME, CATEGORY)
             VALUES ('$song', '$category[1]')");
        }
?>
