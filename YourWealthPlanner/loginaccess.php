<!DOCTYPE html>
<html>
<head>
	<title>insert form</title>
</head>
<body>
<?php
mysql_connect("localhost", "root","");
mysql_select_db("wealth");
if(isset($_POST['submit'])){
$email= $_POST['email'];
$password= $_POST['password'];
$result= mysql_query("select * from admin where password='$password' and email='$email'") or die(mysql_error());
$row=mysql_fetch_assoc($result);
$count = mysql_num_rows($result);
if($count > 0){ 
	session_start();
	$_SESSION['id']=$row['id'];
echo "succesfully login......";
echo $row['email']; 
 ?>
 <meta http-equiv="refresh" content="3;fet.php">
<?php
} 
else {
	echo "Wrong Details / invalid account"; 
	?>
  <meta http-equiv="refresh" content="3;index.php">

<?php 
}
}
?>
</body>
</html>