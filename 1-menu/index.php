    <?php
    $menu = array("home" => "home.php", "gallery" => "gallery.php", "contact" => "contact.php", "about" => "about.php");

    foreach ( $menu as $value ) {
        echo "<li><a href = \"$value\" > ", $value, "</a></li>";
    }
    ?>


