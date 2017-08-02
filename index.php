<html>
<head>
<title>Test Blog Running Off Converted MD Files</title>
<!-- BOOTSTRAP HERE -->
<script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="blog.css">
</head>
<body>
<div class="container">
<?php
	$post_seperator = "";
	$folder = getcwd() . "/posts"; 
	$files = scandir($folder);
	foreach(array_reverse($files) as $file){
		if ($file != "." && $file != ".." && $file != ".htaccess"){
			echo '<div class="well">';
			echo "<small>" . pathinfo($file)["filename"] . "</small>";
			echo file_get_contents($folder . "/" . $file);
			echo "$post_seperator";
			echo "</div>";
		}
	}
?>
<center>
	<small>Site Created By Evan Duffy</small>
	<br>
	<small>August 2017</small>
</center>
</div>
