<?php
    session_start();
    if(!isset($_SESSION["u_id"])) {
        header("Location: index.php");
    }
    $servername = "localhost";
    $username = "root";
    $password = "effulgence2k15";
    $conn = new mysqli($servername, $username, $password, "effdb");
    $stmt = $conn->prepare("SELECT level FROM player WHERE u_id=?");
    $uid = $_SESSION["u_id"];
    $stmt->bind_param("s", $uid);
    $stmt->execute();
    $stmt->bind_result($level);
    $stmt->fetch();
    $stmt->close();
    $_SESSION["level"] = $level;
    $imgsrc = "src=\"images/level1.jpg\"";
    switch ($level) {
        case 0:
            $imgsrc = "src=\"images/level1.jpg\"";
            break;
        case 1:
            $imgsrc = "src=\"images/level2.PNG\"";
            break;
        case 2:
            $imgsrc = "src=\"images/level3.PNG\"";
            break;
        case 3:
            $imgsrc = "src=\"images/level4.jpg\"";
            break;
        case 4:
            $imgsrc = "src=\"images/level5.jpg\"";
            break;
        case 5:
            $imgsrc = "src=\"images/level5.jpg\"";
            break;
        case 6:
            $imgsrc = "src=\"images/level7.jpg\"";
            break;
        case 7:
            $imgsrc = "src=\"images/level8.jpg\"";
            break;
        case 8:
            $imgsrc = "src=\"images/level9.png\"";
            break;
        case 9:
            $imgsrc = "src=\"images/level10.jpg\"";
            break;
        case 10:
            $imgsrc = "src=\"images/level11.png\"";
            break;
        case 11:
            $imgsrc = "src=\"images/level12.jpg\"";
            break;
        case 12:
            $imgsrc = "src=\"images/level13.jpg\"";
            break;
        case 13:
            $imgsrc = "src=\"images/level14.jpg\"";
            break;
        case 14:
            $imgsrc = "src=\"images/level15.jpg\"";
            break;
        case 15:
            $imgsrc = "src=\"images/level16.jpg\"";
            break;
        case 16:
            $imgsrc = "src=\"images/level17.jpg\"";
            break;
        case 17:
            $imgsrc = "src=\"images/level18.jpg\"";
            break;
        case 18:
            $imgsrc = "src=\"images/level19.png\"";
            break;
        case 19:
            $imgsrc = "src=\"images/level20.png\"";
            break;
        case 20:
            $imgsrc = "src=\"images/level21.jpg\"";
            break;
        case 21:
            $imgsrc = "src=\"images/level22.jpg\"";
            break;
        case 22:
            $imgsrc = "src=\"images/level23.jpg\"";
            break;
        case 23:
            $imgsrc = "src=\"images/level24.jpg\"";
            break;
        case 24:
            $imgsrc = "src=\"images/level25.png\"";
            break;
        case 25:
            $imgsrc = "src=\"images/level26.jpg\"";
            break;
        default:
            header("Location: index.php?id=finish");
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Da Vinci Code</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="question.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Effulgence'15</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
          <li class="active"><a href="question.php">Home</a></li>
        <li><a href="leaderboard.php">LeaderBoard</a></li>
        <li><a href="vincirules.php">Rules</a></li>
        <li><a href="hints.php">Get a Hint</a></li>
        <li><a href="#" style="color: white;"><?php echo $_SESSION["u_id"]; echo ' @ Level '; echo $_SESSION["level"]; ?></a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  <div class="jumbotron">
    <h1 style="margin-left:220px">The Da Vinci Code!</h1>
    <?php
        if($_SESSION["status"] == 0) {
            $_SESSION["status"] = 2;
            echo "<p class=\"text-warning\">Wrong Answer!</p>";
        } else if($_SESSION["status"]==1){
            $_SESSION["status"] = 2;
            echo "<p class=\"text-success\">Correct Answer!</p>";
        }
    ?>
    <img style="margin-left:350px" class="img-responsive" <?php echo $imgsrc ?> alt="" width="304" height="236" id="qimg">
    <form role="form" method="post" action="anscheck.php">
    <div class="form-group">
          <label for="text">Answer:</label>
          <input type="text" class="form-control" id="ans" placeholder="Enter Answer" name="ans">
        </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

    
  </div>

  
</div>

</body>
</html>
