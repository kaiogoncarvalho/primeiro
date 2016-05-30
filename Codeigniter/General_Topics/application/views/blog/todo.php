<!DOCTYPE html>
<html>
	<head>	
		<meta charset='UTF-8'>
		<title> <?= $title; ?></title>
	</head>
	<body>
		<h1> <?= $heading; ?> </h1>
		<ul>
		<?php foreach($todo_list as $item): ?>
			<li><?= $item; ?></li>
		<?php endforeach; ?>
		</ul>
	</body>
</html>	