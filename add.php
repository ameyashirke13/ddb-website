<?php
mysql_connect('127.0.0.1:3307','root','');
mysql_select_db("test");



	$id = mysql_escape_string($_GET['id']);
	$name=mysql_escape_string($_GET['name']);
	$title=mysql_escape_string($_GET['title']);
	$desc=mysql_escape_string($_GET['description']);
	
	$image=mysql_escape_string($_GET['image']);
	$date=mysql_escape_string($_GET['date']);
	
	$sql0=mysql_query("SELECT * FROM fav WHERE id='$id' ");
	if(mysql_num_rows($sql0)>0){
		?>
		<script type="text/javascript">alert("Already exits");</script>
		<?php
		header('location:1.php');
	}
	else{
	$sql=mysql_query("INSERT INTO fav values ('$id','$desc','$image','$name','$title','$date')");
	header('location:1.php');
	}	
?>