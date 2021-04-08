<div>
<div>
        <form class="flex center" method="post">
            <p class="add-head">Add Song</p>
            <input type="text" id="sn" class="input" name="song" placeholder="song name">
            <button id="b" class="input button">Add</button>
        </form>
</div>
    <div class="songs flex">
        <?php
            $category = explode("/", $_SERVER['REQUEST_URI']);
            $result = $mysqli->query("SELECT SNAME FROM SONGS WHERE CATEGORY='$category[1]'");
            foreach ($result as $row) {
                $song = $row['SNAME'];
                echo "<div class='inside-songs'>";
                echo "<p name='$song'>" . $song . "</p>";
                echo "<button id='$song' name='$song' onclick='handleRemove(this.id)'>Remove</button>";
                echo "</div>";
            }
        ?>
    </div>
</div>
<script>
    const handleRemove = (songName) => {
        const Pselector = "p[name*='" + songName + "']";
        const Bselector = "button[name*='" + songName + "']";
        $(Pselector).remove();
        $(Bselector).remove();
        $.post("../actions/remove.php", 
        {songName: songName}, 
        (response) => {
            console.log('DELETED: ', response);
        })
    }

    const appendSong = (name) => {
        const div_start = "<div class='inside-songs'>";
        const p =  "<p name=" + "'" + name + "'" + ">" + name + "</p>"
        const b = "<button id=" + "'" + name + "'" + " name=" + "'" +name + "'" + " onclick=handleRemove(this.id)>Remove</button>";
        const div_end = "</div>";
        console.log('this: ', p + b);
        return div_start + p + b + div_end;
    }

    $("#b").click((e) => {
        e.preventDefault();
        $.post("../actions/addSong.php", 
        {song: $("#sn").val(), 
        category: window.location.pathname}, 
        (response) => {
            $(".songs").append(appendSong(response));
        })
    })
</script>

<!-- <?php
        // if ($_POST) {
        //     $song = $_POST['song'];
        //     $mysqli->query("INSERT INTO SONGS(SNAME, CATEGORY)
        //      VALUES ('$song', '$category[1]')");
        // }
?> -->

