<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("wealth");
if(isset($_POST['submit'])){
$id= $_SESSION['id'];
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$confirmpassword=$_POST['confirmpassword'];
$qry ="select password from admin where password = '$oldpassword' and id= '$id'";
$res=mysql_query($qry);
$count=mysql_num_rows($res);
if($count > 0){
$query= mysql_query("update admin set password='$newpassword' where id='$id'"); 
}
else{
	echo "old password wrong";
}

}
?>
<meta http-equiv="refresh" content="2;URL=fet.php">