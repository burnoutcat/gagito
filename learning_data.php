<?php 

include "lib/php/helper.php";

$filename = "data/json_notes.json";
$file = file_get_contents($filename);
$data = json_decode($file); 

print_p($data);
// die;

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<header class="navbar">
		<div class="container">
			<h1>Learning Data</h1>
		</div>
	</header>

	<div class="container">
		<div class="card">
			<h2>Notes</h2>

			<ul>
				<?php 

				for ($i=0; $i <count($data->notes);$i++){
					echo "<li>{$data->notes[$i]}</li>";
					
				}
				 ?>
			</ul>
		</div>
		<div class="card">
			<h2>Users</h2>

			<ol>
				<?php 

				for ($i=0; $i <count($data->users);$i++){
					echo "<li>
						<strong>{$data->users[$i]->name}</strong>
						<span>{$data->users[$i]->type}</span>
						</li><span>{$data->users[$i]->email}</span>";
					
				}
				 ?>
			</ol>
		</div>
	</div>
	
</body>
</html>