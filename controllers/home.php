<?php

	require "../models/Theme.php";
	require "../config.php";
	
	// Loops through all the themes in the themes directory, pulls
	// their information out of the XML file and puts it into a nice array
	
	// Themes directory
	$directory = opendir(ROOT . 'themes');
	
	// Get the themes ready
	$themes = array();
	
	// Loop through the themes
	while ($dirTheme = readdir($directory)) {
		// Filter out the crap
		if (!strstr($dirTheme, ".")) {
			
			// Read the JSON and pull out the appropriate information
			// setting it each to a property of a new theme object
			$jsonFilename	= ROOT . "themes/$dirTheme/theme.json";
			$jsonFile		= fopen($jsonFilename, "r");
			$jsonContent 	= fread($jsonFile, filesize($jsonFilename));
			$json 			= json_decode($jsonContent);
			
			// Prepare the array of files
			$files = array();
			
			// Loop through the theme's files and put them in an array
			$filesDirectory = opendir(ROOT . "themes/$dirTheme/files");
			while ($file = readdir($filesDirectory)) {
				// Filter out the crap
				if (substr($file, 0, 1) != ".") {
					$files[] = $file;
				}
			}
			
			// Create a new theme object to hold it's data
			$theme = new Theme();
			
			// Store it's data
			$theme->name		= $json->theme->name;
			$theme->version		= $json->theme->version;
			$theme->description	= $json->theme->description;
			$theme->image		= URL . "themes/$dirTheme/theme.png";
			$theme->files		= $files;
			
			// Add this theme to the themes array
			$themes[] = $theme;
			
		}
	}
	
	// Include the view
	require "../views/home.php";

?>