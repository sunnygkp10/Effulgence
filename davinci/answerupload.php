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

<div class="container">
    <div class="jumbotron" style="margin-top: 100px">
     <h1 style="margin-left:280px">Answer Upload</h1>
     <form role="form" method="post" action="encryptnupload.php">
    <div class="form-group">
          <label for="text">Answer No.:</label>
          <input type="text" class="form-control" placeholder="Enter Answer No." name="ans_no">
          <label for="text">Answer:</label>
          <input type="text" class="form-control" placeholder="Enter Answer" name="ans">
        </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
 </div>
</div>
</body>
</html>