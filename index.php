<?php
    include("inc/header.php");
    include("function/connect.php");

    $sql = "SELECT * FROM `index_page`";
    $result = $mysqli->query($sql);
    foreach ($result as $item) {
        echo $item["content"];
    }

    include("inc/footer.php");
?>
