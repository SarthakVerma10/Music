    <div class="center">
        <div class="categories">

        <div class="arrows"><i id="prev" class="fas fa-chevron-left fa-8x"></i></div>
        
            <div class='cat flex'>
                <?php
                    $cat = $mysqli->query("SELECT name FROM CATEGORY");
                    foreach ($cat as $row) {
                        $each = $row['name'];
                        echo 
                        "<div id='$each' class='card'>".
                            "<a name='$each' href='$each'>".$each."</a>".
                            "<button 
                            id='$each' 
                            name='$each' 
                            onclick='handleRemove(this.id)'
                            hidden>Remove</button>"
                        ."</div>" ;
                    }
                ?>

            </div>

            <div class="arrows"><i id="next" class="fas fa-chevron-right fa-8x"></i></div>
                
            
        </div>

        <div class="add">
            <a href="/addcategory" class="input link">Add Category</a>
        </div>
        
    </div>

    <script>
        // $(window).on('resize', function() {
        //     var win = $(this);
        //     if (win.width() < 600) {
        //         $('#next').removeClass('fas fa-chevron-right fa-8x');
        //         $('#prev').removeClass('fas fa-chevron-left fa-8x');
        //         $('#next').addClass('fas fa-chevron-right fa-2x');
        //         $('#prev').addClass('fas fa-chevron-left fa-2x');

        //     } 
        // });
        
        const handleRemove = (catName) => {
            const selector = "div[id*='" + catName + "']";
            $(selector).remove();
            $.post("../actions/removeCat.php", {catName: catName}, (response) => {
                console.log('DELETED: ', response);
            })
        }
        let index = 1;

        const getSelector = (index) => {
            return  ".cat div:nth-child(" + index + ")";
        }

        for (index = 2; index <= $(".cat").children().length; index++) {
            $(getSelector(index)).hide();
        }
        index = 1;
        console.log("child: ", $(".cat").children().length);
        $("#next").click(() => {
            $(getSelector(index)).hide();
            if (index ===  $(".cat").children().length) {
                index = 0;
            }
            index++;
            $(getSelector(index)).show("drop", {direction: "left"});
        })

        $("#prev").click(() => {
            $(getSelector(index)).hide();
            if (index ===  1) {
                index = $(".cat").children().length;
            } else {
                index--;
            }
            $(getSelector(index)).show("drop", { direction: "right" });
        })

    </script>


