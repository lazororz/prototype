<?php

function regenerate() {
    $_SESSION['code'] = uniqid();
    $_SESSION['code_time'] = time();
}

function add()
{
    session_start();

   
    require '../database/config.php';

    $uid= $_SESSION['code'];
    $msg = htmlentities($_POST['message']);
    $date =  date('Y-m-d H:i:s', time());

    echo $uid . " " . $date . " ". $msg;
    
  
    $stmt = $conn->prepare("INSERT INTO `bericht`(`message`, `datum`,  `uniek_id`) VALUES (?,?,?)");
    $stmt->bind_param("sss", $msg, $date, $uid);
    
    if ($stmt->execute()) {
        echo 'ok!';
        return;
    }
    
}

function show()
{
    require_once '../database/config.php';

    $data = [];
    $sql = "SELECT * FROM `bericht` WHERE `datum` ORDER BY `bericht`.`datum` DESC";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result) ) {
        $data[] = $row;
    }
    echo json_encode($data);
    return;
}