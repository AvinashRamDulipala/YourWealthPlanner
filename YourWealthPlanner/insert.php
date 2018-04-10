<?php
mysql_connect("localhost", "root", "");
mysql_select_db("wealth");
if (isset($_POST['submit'])) {
	 $a = $_POST['sel1'];
	 $b = $_POST['fname'];
	 $c = $_POST['email'];
	 $d = $_POST['pno'];
	 $e = $_POST['professional'];
	 $f = $_POST['city'];
/*print "<pre>";
print_r($_POST);
print "</pre>";*/
$e = mysql_query("insert into book_order (plan_type,name,email,pno,professional,city) values ('$a','$b','$c','$d','$e','$f')");
if ($e == true) {
	echo "Sucessfully booked";
	?>
	 <meta http-equiv="refresh" content="1;URL=youtube.php">
	 <?php
}
}
?>