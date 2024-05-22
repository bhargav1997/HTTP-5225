<?php 
    echo "Hello World!";

    $theme = "Dark";

    if ($theme == "Dark") {
    ?> 
    <script>
        document.body.style.backgroundColor = "black";
        document.body.style.color = "white";
    </script>
    <?php
        } else if ($theme == "Light") { ?>
            <script>
            document.body.style.backgroundColor = "white";
            document.body.style.color = "black";
        </script>
        <?php
    }
?>