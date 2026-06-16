<?php
    include("../function/connect.php");

    $new_path = "";
    if (isset($_FILES['download']['name']) && $_FILES['download']['name'] != "") {
        $filename = md5(uniqid());
        $ext = pathinfo($_FILES["download"]["name"], PATHINFO_EXTENSION);
        $current_path = $_FILES["download"]["tmp_name"];
        $new_path = $_SERVER['DOCUMENT_ROOT'] . '/assets/upload/' . $filename . "." . $ext;
        move_uploaded_file($current_path, $new_path);
    }

    $sql = sprintf(
        "INSERT INTO `feedback`(`name`, `phone`, `path`) VALUES ('%s','%s','%s')",
        $mysqli->real_escape_string($_POST['name']),
        $mysqli->real_escape_string($_POST['tel-number']),
        $new_path
    );
    $mysqli->query($sql);

    header("Location: /answer/");
    exit;
