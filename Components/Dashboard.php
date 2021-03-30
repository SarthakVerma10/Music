    <div>

        <div>
            <form method="post">
                <label for="cat-name">
                    <input type="text" name="cat-name">
                </label>
                <button>Create</button>
            </form>
        </div>

        <div>
            Categories
            <div class='flex'>
                <?php
                    $cat = $mysqli->query("SELECT name FROM CATEGORY");
                    foreach ($cat as $row) {
                        $each = $row['name'];
                        echo 
                        "<div>".
                            "<a href='$each'>".$each."</a>"
                        ."</div>" ;
                    }
                ?>

            </div>
        </div>
        
    </div>

    <?php
        if ($_POST) {
            $name = $_POST["cat-name"];
            echo $name;
            $mysqli->query("INSERT INTO CATEGORY VALUES ('$name')");
        }
        
    ?>
