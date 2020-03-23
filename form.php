
<?php
require_once "config.php";
 ?>
<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
  <title>user form</title>
  
</head>
<body>
  <div id="form">

  <form action="form.php" method="post">
  <input type="text" id="fname" name="firstName"  placeholder="First Name">
  <input type="text" id="lname" name="lastName"  placeholder="Last Name">
  <button type="submit" name="submit">Submit</button>
</form> 

  </div>
</body>
</html>