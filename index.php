
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form in Php</title>
</head>
<body>
  
  <form action="contact.php" method="POST">
    <label for="uname">UserName</label><br>
    <input type="text" name="uname" id="uname"><br>
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email"><br>
    <label for="pass">Password</label><br>
    <input type="text" name="pass" id="pass"><br>
    <br>
    <input type="submit" name="btn" value="Submit Value">
  </form>
</body>
</html>