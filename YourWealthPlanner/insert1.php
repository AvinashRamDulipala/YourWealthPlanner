<?php
mysql_connect("localhost", "root", "");
mysql_select_db("wealth");
if (isset($_POST['submit'])) {
	 $a = $_POST['name'];
	 $b = $_POST['email'];
	 $c = $_POST['contact'];
	 $d = $_POST['message'];
/*print "<pre>";
print_r($_POST);
print "</pre>";*/
$e = mysql_query("insert into enquiry(name,email,contact,message) values ('$a','$b','$c','$d')");
if ($e == true) {
	echo "Thanks for choosing wealthplanning";
	
	?>
	 <meta http-equiv="refresh" content="1;URL=index.php">
	 <?php
}
}
?>