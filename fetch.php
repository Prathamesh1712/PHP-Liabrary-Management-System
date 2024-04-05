<?php
session_start();
?>
<p hidden><?php echo"  WELCOME ". $_SESSION['username']; ?></p>
<?php

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $a=$_SESSION['username'];
   $sql = " SELECT fname,lname FROM reg where username=' ".$a. " ' ";
   mysql_select_db('new');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "<h4>WELCOME :Dr.{$row['fname']}</h4><br> ".
         
         "<br>";
   
   }
   
  
   
   mysql_close($conn);
?>

