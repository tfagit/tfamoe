<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/reset.css"/>
		<link rel="stylesheet" href="css/main.css"/>
		<title>Torrent index</title>
	</head>
	<body>
		<div class="wrapper">
			<header>
				<h1 id="title">BDO Torrent Index</h1>
				<span id="subtitle">M&uacute;sica de qualidade (e talvez mais umas coisinhas)</span>
			</header>
			<nav>
				<ul>
					<li><a href="http://tfats.tk">Voltar para a TFA</a></li>
				</ul>
			</nav>
			<ul id="torrentlist">
				<?php 
					foreach($folderlist as $folder){
						$js = "javascript:var a = window.prompt('Copie','wget -r -np -nH -cut-dirs=2 -R index.html " . $current . $folder . "/');";
						echo "<li><a href=\"{$folder}\"/>{$folder}</a><a class=\"wget\" href=\"" . $js . "\">WGET</a></li>";
					}
				 ?>
			</ul>
			<footer><span>dotbdo, 2013</span></footer>
		</div>
	</body>
</html>