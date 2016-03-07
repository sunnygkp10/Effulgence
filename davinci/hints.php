<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
        <li><a href="vincirules.php">Rules</a></li>
        <li class="active"><a href="hints.php">Get a Hint</a></li>
        <li><a href="#" style="color: white;"><?php session_start(); echo $_SESSION["u_id"]; echo ' @ Level '; echo $_SESSION["level"]; ?></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="jumbotron">
  <h2>Hints</h2>
  <ul class="list-group">
      <li class="list-group-item"><h3 class="list-group-item-heading">Hint for Level 1</h3>
          <p class="list-group-item-text" style="font-size: 120%">Hint</p></li>
   <li class="list-group-item"><h3 class="list-group-item-heading">Hint for Level 1</h3>
          <p class="list-group-item-text" style="font-size: 120%">Hint</p></li>
    <li class="list-group-item"><h3 class="list-group-item-heading">Hint for Level 1</h3>
          <p class="list-group-item-text" style="font-size: 120%">Hint</p></li>
  </ul>
</div>
</div>
</body>
</html>
