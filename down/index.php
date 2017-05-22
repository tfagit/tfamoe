<?php
	require 'functions.php';

	$folder = "/var/www/tfatstk/.down";

	$blacklist = array("css", "js");

	$folderlist = fetch_folder_list($folder, $blacklist);

	$current = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	
	require 'views/torrents.view.php';

?>