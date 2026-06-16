<?php
    include("../inc/header.php");
    include("../function/connect.php");
?>

    <section class="banner">
        <div class="content">
            <h1>ДОМАШНЯЯ КОНДИТЕРСКАЯ</h1>
            <h2>СДЕЛАНО С ЛЮБОВЬЮ...</h2>
        </div>
    </section>

    <section class="fillings">
        <div class="content">
            <h2>А КАКИМ БУДЕТ ТВОЙ ТОРТ?</h2>
            <?php
                $data = "";
                $sql = "SELECT * FROM `fillings`";
                $result = $mysqli->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $data .= sprintf('
                    <figure class="filling">
                        <img src="/%s" alt="%s">
                        <figcaption>%s</figcaption>
                    </figure>
                    ', $row['path'], $row['name'], $row['name']);
                }
                echo $data;
            ?>
            <h2>ВЫБРАЛ? СКОРЕЕ ЖМИ СЮДА!</h2>
        </div>
    </section>

<?php include("../inc/footer.php"); ?>
