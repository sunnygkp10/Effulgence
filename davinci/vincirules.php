<!DOCTYPE html>
<html lang="en">
<head>
  <title>Da Vinci Code</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
          <li><a href="question.php">Home</a></li>
        <li><a href="leaderboard.php">LeaderBoard</a></li>
        <li class="active"><a href="vincirules.php">Rules</a></li>
        <li><a href="hints.php">Get a Hint</a></li>
        <li><a href="#" style="color: white;"><?php session_start(); echo $_SESSION["u_id"]; echo ' @ Level '; echo $_SESSION["level"]; ?></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="jumbotron">
  <h2>Rules</h2>
  <ul class="list-group">
    <li class="list-group-item">Rule 1</li>
    <li class="list-group-item">Rule 2</li>
    <li class="list-group-item">Rule 3</li>
  </ul>
</div>
</div>
</body>
</html>
