<?php
$hostname="localhost";
$username="root";
$password="";
$db="new";
$conn=mysqli_connect($hostname,$username,$password,$db);
$q="select * from reg";
$result=mysqli_query($conn,$q);
?>
<html>
<body>
<select>
<?php  while ($row=mysqli_fetch_array($result)):; ?>
<option value="<?php echo $row[0];?>"><?php echo $row[0]; ?></option>
<?php endwhile;?>
</select>
</body>
</html>
