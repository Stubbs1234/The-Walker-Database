<html>
<head>
<title>Create a Walk</title>
</head>
<body>
<?php
if (isset($_GET['org1'])){
}


?>
<form action="eventupload.php" method="POST">
<input type="text" name="name" id="name"/>
<input type="text" name="date" id="date"/>
<input type="text" name="time" id="time"/>
<input type="text" name="description" id="description"/>
<input type="text" name="org" id="org" value="<?php echo $_GET['org1']; ?>"/>
<input type="submit" name="submit" value="Add Your Walk"/>
</body>
</html>
