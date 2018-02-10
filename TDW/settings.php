<html>
<head>
</head>
<body>
<p>Where would you like to give your admins access</p>
<p>Personal Details<input type="checkbox" name="PDetails" value="Yes"></p>
<p>Events<input type="checkbox" name="Events" value="Yes"></p>
<p>iOS<input type="checkbox" name="iOS" value="Yes"></p>
<p>Walking Planner<input type="checkbox" name="WPlanner" value="Yes"></p>
<p>Picture Upload<input type="checkbox" name="PictureUpload" value="Yes"></p>
<?php 

if(isset($_POST['formWheelchair']) && 
   $_POST['formWheelchair'] == 'Yes') 
{
    echo "Need wheelchair access.";
}
else
{
    echo "Do not Need wheelchair access.";
}



?>
</body>
</html>







