<?php
$folder = "upload/";
if (is_uploaded_file($_FILES['filename']['tmp_name']))  {   
    if (move_uploaded_file($_FILES['filename']['tmp_name'], $folder.$_FILES['filename']['name'])) {
         Echo "File uploaded
         <form method='get' action='http://localhost:8888/keppbox/homepage.php'>
    <button type='submit'>Back</button>
    </form>";
         
    } else {
         Echo "File not moved to destination folder. Check permissions";
    };
} else {
     Echo "File is not uploaded.";
}; 
?>