<html>
<body>
<center>
<form action="" method="post">
<input type="text" name="username" placeholder="Enter Username To Search/"><br/>
<input type="submit" name="search" value="search Detalis">
</form>
</center>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'new');

if(isset($_POST['search']))
{
$username=$_POST['username'];
$q="select fname,lname,adde,mno,username from reg where username=' ".$username." ' ";
$qrun=mysqli_query($con,$q);
while($row=mysqli_fetch_array($qrun))
{
 ?>
      <form action="" method="POST">
       <input type="hidden" name="username" value="<?php echo $row['username']?>"/>
 <input type="text" name="fname" value="<?php echo $row['fname']?>"/>
 <input type="text" name="lname" value="<?php echo $row['lname']?>"/>
 <input type="text" name="adde" value="<?php echo $row['adde']?>"/>
<input type="text" name="mno" value="<?php echo $row['mno']?>"/>
</form>
<?php
}
}
?>