<?php 
	
	function fetch_folder_list($folder, $blacklist){
		$folderlist = glob($folder . '/*' , GLOB_ONLYDIR);

		for($i = 0; $i < count($folderlist); $i++){
			$folderlist[$i] = substr($folderlist[$i], strlen($folder)+1);
		}

		foreach($blacklist as $item){
			$key = array_search($item, $folderlist);
			if($key !== false){
				unset($folderlist[$key]);
			}
		}

		return $folderlist;
	}

 ?>