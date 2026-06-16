<?php
    include("inc/header.php");
    include("connect.php");
?>

    <section class="banner">
        <div class="content">
            <h1>ДОМАШНЯЯ КОНДИТЕРСКАЯ</h1>
            <h2>СДЕЛАНО С ЛЮБОВЬЮ...</h2>
        </div>
    </section>

    <section class="cakes">
        <div class="content">
            <?php
                $data = "";
                $sql = "SELECT * FROM `cakes`";
                $result = $mysqli->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $data .= sprintf('
                    <div class="cake">
                        <img src="%s" alt="%s">
                        <div class="cake_descript">
                            <div class="cake_descript_text">
                                <h2>%s</h2>
                                <p>%s</p>
                            </div>
                        </div>
                        <div class="cake_buy">
                            <div class="cake_buy_wrap">
                                <div class="cake_buy_wrap_filling">
                                    <ul>
                                        <li>%s</li>
                                        <li>%s</li>
                                        <li>%s</li>
                                    </ul>
                                </div>
                                <div class="cake_buy_wrap_price">
                                    <ul>
                                        <li>Вес: %s</li>
                                        <li>Цена: %s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    ', $row['path'], $row['title'], $row['title'], $row['information'],
                       $row['filling_1'], $row['filling_2'], $row['filling_3'],
                       $row['weight'], $row['price']);
                }
                echo $data;
            ?>
        </div>
    </section>

<?php include("inc/footer.php"); ?>
