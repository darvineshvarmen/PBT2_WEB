<?php
   $filename = $_FILES["myfile"]["name"];
   $filetype = $_FILES["myfile"]["type"];
   $filesize = $_FILES["myfile"]["size"];
   $tempfile = $_FILES["myfile"]["tmp_name"];
   $filenameWithDirectory = "uploaded-file/".$filename;
?>
<html>
<head>
   <title>PBT2</title>
   
</head>
<body>
    <style>
        p.dashed {border-style: dashed;}
        </style>
        <p class="dashed">
<?php
   if(move_uploaded_file($tempfile, $filenameWithDirectory))
   {
      echo "<h2>FILE UPLOADED</h2>";
      echo "<p>You file is uploaded successfully.</p>";
      echo "<p>File name = <b>$filename</b></p>";
      echo "<p>File type = <b>$filetype</b></p>";
      echo "<p>File size = <b>$filesize</b></p>";
      
   }
   else 
   {
      echo "Error occurred during file upload!";
   }
   
?>
</body>
</html>