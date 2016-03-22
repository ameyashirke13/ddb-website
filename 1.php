<?php
mysql_connect('127.0.0.1:3307','root','');
mysql_select_db("test");

$sqlimage  = "SELECT * FROM events ";
$imageresult1 = mysql_query($sqlimage);
while($rows=mysql_fetch_assoc($imageresult1))
{
	$name= $rows['name'];
	$image= $rows['img'];
	$title= $rows['title'];
    $id = $rows['id'];
    $desc=$rows['description'];
    $date=$rows['date'];?>

    <a href="2.php?id=<?php echo"$id";?>"><div id="#1" style="width:70%;height:35%;">
	<div id="#2" style="width:25%;height:100%;float:left;">
		<?php echo "<img src= '$image' width=100%>";?>
	</div>
	<div id="#3" style="width:70%;height:100%;float:right;">
		<?php echo "$name";?> <br>
		<?php echo "$title";?><br><br><br>
		
			<a href="add.php?id=<?php echo "$id"; ?>&name=<?php echo "$name"; ?>&title=<?php echo "$title"; ?>&description=<?php echo "$desc"; ?>&image=<?php echo "$image"; ?>&date=<?php echo "$date"; ?>">Add to favourites</a>
		
	</div>
</div></a>
    <?php
} ?>