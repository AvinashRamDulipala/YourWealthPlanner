<?php  
@include 'dashboard.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>changepassword</title>
</head>
<body>
<form method="post" action="editpass.php">
oldpass word<input type="password" name="oldpassword" value=""> <br>
newpass word<input type="password" name="newpassword" value=""><br>
confirm password<input type="text" name="confirmpassword"  value=""><br>
<input type="submit" value="changepassword" name="submit">
</form>
</body>
</html>