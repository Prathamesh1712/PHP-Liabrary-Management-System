<?php
$id=$_POST['t1'];
$name=$_POST['t2'];
$mobno=$_POST['t3'];
$email=$_POST['t4'];
$pass=$_POST['t5'];
$cpass=$_POST['t6'];
$con=mysql_connect("localhost","root");
$db=mysql_select_db("student",$con);
$res=mysql_query("insert into m(id,name,mobno,email,pass,cpass)values('$id','$name','$mobno','$email','$pass','$cpass')");
if($res==true)
{

}
else
{

}
?>
