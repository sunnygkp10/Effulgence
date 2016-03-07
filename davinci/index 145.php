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

<div class="container">
    <div class="jumbotron" style="margin-top: 100px">
     <h1 style="margin-left:400px">Login</h1>
     <form role="form" method="post" action="logincheck.php">
    <div class="form-group">
          <label for="text">User ID:</label>
          <input type="text" class="form-control" placeholder="Enter User ID" name="u_id">
          <label for="text">Password:</label>
          <input type="password" class="form-control" placeholder="Enter Password" name="pswd">
        </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
 </div>
</div>
</body>
</html>