<?php

function regenerate() {
    $_SESSION['code'] = uniqid();
    $_SESSION['code_time'] = time();
}

function add()
{
    session_start();

    echo $_SESSION['code'];
    require '../database/config.php';

    $msg = htmlentities($_POST['message']);
    $date =  date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $date)));

    $stmt = $conn->prepare("");
    $stmt->bind_param("sss", $firstname, $msg, $date);

}