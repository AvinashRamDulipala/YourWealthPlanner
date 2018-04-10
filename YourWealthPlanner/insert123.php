<?php
mysql_connect("localhost", "root", "");
mysql_select_db("wealth");
if (isset($_POST['submit'])) {
	 $a = $_POST['name'];
	 $b = $_POST['message'];
	
$e = mysql_query("insert into ramana(name,message) values ('$a','$b')");
if ($e == true) {
	echo "Sucessfully updated";
	?>
	 <meta http-equiv="refresh" content="1;URL=fet.php">
	 <?php
}
}
?>