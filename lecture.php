<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>lecturenote upload</title>
</head>
<body>
<h1>Lecture note Upload:</h1>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <b>Please Upload The file :</b><br><br>
  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  <input type="submit" value="Upload file" name="submit"><br><br>
</form>

<a href="index.php">Go to index</a><br><br>
</body>
</html>