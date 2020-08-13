<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
 <title>Adibe login Page</title>
</head>
<body>
<form method="post" action="verify.php">
Users :    <input required type="text" name="name"><br>
Password : <input required type="password" name="password"><br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>

