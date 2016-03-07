<?php
    $id = $_POST["u_id"];
        session_start();
        $_SESSION["u_id"] = $id;
        $_SESSION["status"] = 2;
        header("Location: question.php");
?>