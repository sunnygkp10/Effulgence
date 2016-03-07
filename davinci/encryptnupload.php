<?php
    $ans_no = $_POST["ans_no"];
    $ans = $_POST["ans"];
    $servername = "localhost";
    $username = "root";
    $password = "effulgence2k15";
    $conn = new mysqli($servername, $username, $password, "effdb");
    $options = [
        'cost' => 10,
    ];
    $hash = password_hash($ans, PASSWORD_BCRYPT,$options);
    $stmt = $conn->prepare("INSERT into answer values($ans_no,'$hash')")or die('error');
    $stmt->bind_param("s", $hash);
    $stmt->execute();
    header("Location: answerupload.php");?>
