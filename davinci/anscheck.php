<?php
    session_start();
    $u_ans = $_POST["ans"];
    $current_level = $_SESSION["level"];
    $servername = "localhost";
    $username = "root";
    $password = "effulgence2k15";
    $conn = new mysqli($servername, $username, $password, "effdb");
    $stmt = $conn->prepare("SELECT ans FROM answer WHERE level=?");
    $level = $_SESSION["level"];
    $stmt->bind_param("s", $level);
    $stmt->execute();
    $stmt->bind_result($ans);
    $stmt->fetch();
    $stmt->close();
    if(password_verify($u_ans, $ans)) {
        $current_level++;
        $uid = $_SESSION["u_id"];
        $stmt = $conn->prepare("UPDATE player SET level=? , ts = CURRENT_TIMESTAMP WHERE u_id=\"$uid\"");
        $stmt->bind_param("i", $current_level);
        $stmt->execute();
        $stmt->close();
        $_SESSION["status"] = 1;
        header("Location: question.php");
    } else {
        $_SESSION["status"] = 0;
        header("Location: question.php");
    }
?>
