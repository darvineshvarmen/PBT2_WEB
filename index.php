<html>
<head>
    <style>
        body {background-color: grey;}
        p.dashed {border-style: dashed;}
        </style>
   <title>PBT 2</title>
</head>
<body>
   <h2>Upload Your Image File</h2>
   <p class="dashed"></p>CHOOSE YOUR IMAGE TO UPLOAD<br><br/>
   <form action="fileUploadScript.php" method="post" enctype="multipart/form-data">
      <input type="file" name="myfile"><br/><br/>
      <input type="submit" value="Upload Image" >
      <p class="dashed"></p>
   </form>
</body>
</html>