<?php

	error_reporting(E_ALL);

	require "../models/Theme.php";
	require "../config.php";
	
	// Gets the name of the theme from the URL and displays it on it's own
	
	// Get the name of the theme
	$themeName = $_GET['theme'];
			
	// Read the JSON and pull out the appropriate information
	// setting it each to a property of a new theme object
	$jsonFilename	= ROOT . "themes/$themeName/theme.json";
	$jsonFile		= fopen($jsonFilename, "r");
	$jsonContent 	= fread($jsonFile, filesize($jsonFilename));
	$json 			= json_decode($jsonContent);
	
	// Prepare the array of files
	$files = array();
	
	// Loop through the theme's files and put them in an array
	$filesDirectory = opendir(ROOT . "themes/$themeName/files");
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
	$theme->image		= URL . "themes/$themeName/theme.png";
	$theme->files		= $files;
	
	// Include the view
	require "../views/single.php";

?>