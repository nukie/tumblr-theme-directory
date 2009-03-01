<!DOCTYPE html>

<html lang="en">

	<head>
		
		<title>Tumblr Theme Directory &mdash; <?=$theme->name?></title>
		
		<link rel="stylesheet" type="text/css" media="screen, projection" href="../views/style.css" />
	
	</head>

	<body>
		
		<div id="wrapper">
		
			<h1><a href="http://tumblr.com">Tumblr</a> <a href="../">Theme Directory</a></h1>
		
			<p id="blurb">
				They're a little more of a chore to install than a theme from Tumblr's own theme
				garden but approval takes an eternity so for now you can get the files here. All themes 
				by <a href="http://jimwhimpey.com">Jim Whimpey</a>.</p>
				
			<div class="theme single">
				
				<h2><?=$theme->name?></h2>
				
				<img src="<?=$theme->image?>" alt="<?=$theme->name?>" />
				
				<p><?=$theme->description?></p>
				
				<h3>Files</h3>
				
				<p>Host all files but index.html on your own server or use Tumblr's <a href="http://www.tumblr.com/themes/upload_static_file">
					static file uploader</a> to host files. Then copy the index.html file contents into your Tumblr theme's custom HTML
					and make sure the paths to the other files are correct. Done!</p>
				
				<ul>
				
					<?php foreach($theme->files as $file) { ?>
				
						<li><a href="../themes/<?php echo strtolower($theme->name); ?>/files/<?=$file?>"><?=$file?></a></li>
				
					<?php } ?>
				
				</ul>
				
			</div>
			
			<div id="footer">
				Fork this project on <a href="http://github.com/jimwhimpey/tumblr-theme-directory/tree/master">Github</a>.
			</div>
		
		</div>
		
	</body>
	
</html>