<?php
    $servername = "localhost";
    $username = "root";
    $password = "effulgence2k15";
    $conn = new mysqli($servername, $username, $password, "effdb");
    $result = $conn->query("SELECT u_id FROM player ORDER BY level DESC, ts ASC LIMIT 50");
    session_start();
?>

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
        <li class="active"><a href="leaderboard.php">LeaderBoard</a></li>
        <li><a href="vincirules.php">Rules</a></li>
        <li><a href="hints.php">Get a Hint</a></li>
        <li><a href="#" style="color: white;"><?php echo $_SESSION["u_id"]; echo ' @ Level '; echo $_SESSION["level"]; ?></a></li>
      </ul>
    </div>
  </div>
</nav>
    
    <div class="container" style="margin-top: 100px; ">
  <h2>LeaderBoard</h2>
  <p>The Top Fifty Crypto Hunters:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Rank</th>
        <th>Name</th>
        <th>College</th>
      </tr>
    </thead>
    <tbody>
       <?php
            if($result->num_rows > 0) {
                for($i=1; $i<=$result->num_rows; $i++) {
                    $row = $result->fetch_assoc();
        ?>
      <tr>
        <td><?php echo$i ?></td>
        <td><?php echo $row["u_id"] ?></td>
        <td>KNIT</td>
      </tr>
            <?php }} $conn->close(); ?>
    </tbody>
  </table>
</div>

</body>
</html>
