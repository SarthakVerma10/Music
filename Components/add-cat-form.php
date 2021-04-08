<div class="">
            <form class="flex" method="post" autocomplete="off">
                <label class="center" for="cat-name">
                    <p class="add-head">Add Category</p>
                    <input 
                    type="text" 
                    name="cat-name"
                    class="input"
                    >
                </label>
                <button class="input button">Create</button>
            </form>
</div>

<?php
        if ($_POST) {
            $name = $_POST["cat-name"];
            $mysqli->query("INSERT INTO CATEGORY VALUES ('$name')");
            header('Location: /');
        }
        
    ?>