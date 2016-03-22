<?php
$iid=$_GET["id"];
mysql_connect('127.0.0.1:3307','root','');
mysql_select_db("test");

$sqlimage  = "SELECT * FROM events WHERE id='$iid'  ";
$imageresult1 = mysql_query($sqlimage);
while($rows=mysql_fetch_assoc($imageresult1))
{
	$desc= $rows['description'];
	$image= $rows['img'];
	$title= $rows['title'];
    $id = $rows['id'];?>
   
    <div id="#5" style="width:40%;height:40%;margin-left:10%;">
    <?php echo "<img src= '$image' width=100%>";?><br><br><?php echo "$desc";?>
    </div>
    
    <?php
} ?>