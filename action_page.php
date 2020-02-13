<?php 

require_once "lib/php/helper.php";

$data = get_json("data/json_notes.json");

$upload_info = $_POST;

if(isset($_POST['name'])){

	array_push($data->users,$upload_info);
	file_put_contents('data/json_notes.json', json_encode($data));

} else {}

 ?><!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>User Admin</title>

 	<link rel="stylesheet" href="common/common.css">
	<link rel="stylesheet" href="css/admin.css">

 </head>
 <body>

 	<header class="navbar">
		<div class="navbar-wrapper flex-align-center flex-parent">
			<div class="flex-child">
				<p><strong>Gagito</strong>  | Admin</p>
			</div>
			<div class="flex-none">
				<a href="user_admin.php">Users</a>
			</div>
	
		</div>
	</header>

	<div class="container card" style="text-align: center; margin-top: 2em;">

		<?php 

			if(isset($_POST['name'])){
				echo "<h2 style='margin: 2em 0 2em 0'>". $_POST['name'] . " Added</h2>";
			} else {
				echo "<h2 style='margin: 2em 0 2em 0'>Something Went Wrong</h2>";
			}


		 ?>
		

		<button class="button" onclick="location.href='user_admin.php'" type="button" class="button" style="width: 80%;">BACK TO LIST</button>
	</div>




 	
 </body>
 </html>
