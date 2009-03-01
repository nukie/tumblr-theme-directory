<!DOCTYPE html>

<html lang="en">

	<head>
		
		<title>Tumblr Theme Directory</title>
		
		<link rel="stylesheet" type="text/css" media="screen, projection" href="./views/style.css" />
	
	</head>

	<body>
		
		<div id="wrapper">
		
			<h1><a href="http://tumblr.com">Tumblr</a> Theme Directory</h1>
		
			<p id="blurb">
				They're a little more of a chore to install than a theme from Tumblr's own theme
				garden but approval takes an eternity so for now you can get the files here. All themes 
				by <a href="http://jimwhimpey.com">Jim Whimpey</a>.</p>
		
			<div id="themes">
				
				<?php foreach ($themes as $theme) { ?>
				
					<div class="theme">
						
						<a href="./theme/<?php echo strtolower($theme->name); ?>">
							<img src="<?=$theme->image?>" alt="<?=$theme->name?>" />
						</a>
						
						<h2>
							<a href="./theme/<?php echo strtolower($theme->name); ?>"><?=$theme->name?></a>
						</h2>
						
						<p><?=$theme->description?></p>
						
					</div>				
				
				<?php } ?>
				
			</div>
			
			<div id="footer">
				Fork this project on <a href="http://github.com/jimwhimpey/tumblr-theme-directory/tree/master">Github</a>.
			</div>
		
		</div>
		
	</body>
	
</html>