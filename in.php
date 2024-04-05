<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
</head>
<body>
<h2>City name</h2>
<form method="post" action="">
<input type="text" id="first_name" name="first_name" value="<?php echo $DB_ROW["fname"]; ?>">
<input type="text" id="last_name" name="last_name" value="<?php echo $DB_ROW["lname"]; ?>">
<input type="text" id="city" name="city" value="<?php echo $DB_ROW["mno"]; ?>">
</form>
</body>
</html>