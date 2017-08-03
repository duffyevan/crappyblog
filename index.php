<html>
<head>
<title>Test Blog Running Off Converted MD Files</title>
<link rel="stylesheet" href="node_modules/clarity-ui/clarity-ui.min.css">
<link rel="stylesheet" href="node_modules/clarity-icons/clarity-icons.min.css">
<link rel="stylesheet" href="blog.css">
</head>
<body>
<div class="main-container">
<header class="header-6">
	    <div class="branding">
	        <a href="#" class="nav-link">
	            <img src="https://www.evanduffy.org/resources/Bidoof.gif" style="vertical-align: top;"></img>
	            <span class="title">blog.evanduffy.org</span>
	        </a>
	    </div>
	    <div class="header-nav">
	    	<a class="nav-link nav-text" href="https://www.evanduffy.org">Home</a>
    		<a class="active nav-link nav-text" href="#">Blog</a>
		</div>
	</header>
	<div class="content-container">
		<div class="content-area">
			<?php
				$post_seperator = "";
				$folder = getcwd() . "/posts"; 
				$files = scandir($folder);
				foreach(array_reverse($files) as $file){
					if ($file != "." && $file != ".." && $file != ".htaccess"){
						echo "<div class='card'>";
						echo "<div class='card-block'>";
						echo "<small>" . pathinfo($file)["filename"] . "</small>";
						echo file_get_contents($folder . "/" . $file);
						echo "$post_seperator";
						echo "</div></div>";
					}
				}
			?>
			<center>
				<small>Site Created By Evan Duffy</small>
				<br>
				<small>August 2017</small>
			</center>
		</div>
	</div>


</div>
