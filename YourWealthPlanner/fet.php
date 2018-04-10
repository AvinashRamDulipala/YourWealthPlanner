<?php 
session_start(); 
@include 'dashboard.php';
?>
<h2 style="text-align:center;">BOOK ORDER DETAILS</h2>
<?php

mysql_connect("localhost", "root", "");
mysql_select_db("wealth");
$a = mysql_query("select * from book_order");
$b = mysql_num_rows($a);
$i = 1;
if ($b>0) {
	?>
		<table border="3">
			<thead > 
				<th>id</th>
				<th>Plan</th>
				<th>name</th>
				<th>email</th>
				<th>phno</th>
				<th>professional</th>
				<th>city</th>
				<th>ordered time</th>
			</thead>
			<?php while ($c = mysql_fetch_array($a)) {
				
			?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $c['plan_type']; ?></td>
				<td><?php echo $c['name']; ?></td>
				<td><?php echo $c['email']; ?></td>
				<td><?php echo $c['pno']; ?></td>
				<td><?php echo $c['professional']; ?></td>
				<td><?php echo $c['city']; ?></td>
				<td><?php echo $c['createdat']; ?></td>
			</tr>
			<? 
			} ?>
		</table>	
	<?
}


?>
<h2 style="text-align:center;">ENQUIRY FORM DETAILS</h2>
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("wealth");
$a = mysql_query("select * from enquiry");
$b = mysql_num_rows($a);
$i = 1;
if ($b>0) {
	?>
		<table border="3">
			<thead > 
				<th>id</th>
				<th>name</th>
				<th>email</th>
				<th>contact</th>
				<th>message</th>
				<th>enquiry time</th>
			</thead>
			<?php while ($c = mysql_fetch_array($a)) {
				
			?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $c['name']; ?></td>
				<td><?php echo $c['email']; ?></td>
				<td><?php echo $c['contact']; ?></td>
				<td><?php echo $c['message']; ?></td>
				<td><?php echo $c['created_at']; ?></td>
			</tr>
			<? 
			} ?>
		</table>	
	<?
}


?>
<form method="POST" action="insert123.php">
	<div class="col-md-12">
	                     <div class="form-group">
                            <label for="name">
                                Subject</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Description</label>
                            <textarea name="message" id="message" class="form-control" name="message" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="col-md-12" style="margin-top:-50px; margin-left:300px;">
                        <button type="submit" name="submit" class="btn btn-primary " id="btnContactUs">
                            Send Message</button>
                    </div>
                    </div>
</form>
<h2 style="text-align:center;">MY WORK DETAILS</h2>
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("wealth");
$a = mysql_query("select * from ramana");
$b = mysql_num_rows($a);
$i = 1;
if ($b>0) {
	?>
		<table border="3">
			<thead > 
				<th>id</th>
				<th style="height:20px;">subject</th>
				<th>message</th>
				<th>enquiry time</th>
			</thead>
			<?php while ($c = mysql_fetch_array($a)) {
				
			?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $c['name']; ?></td>
				<td><?php echo $c['message']; ?></td>
				<td><?php echo $c['createdat']; ?></td>
			</tr>
			<? 
			} ?>
		</table>	
	<?
}


?>
