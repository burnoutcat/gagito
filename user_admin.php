<?php  

require_once "lib/php/helper.php";

$filename = "data/json_notes.json";

$data = get_json($filename);


// print_p($_GET);
// print_p($_POST);



if (isset($_POST['name'])) {
	$data->users[$_GET['id']]->name = $_POST['name'];
	$data->users[$_GET['id']]->type = $_POST['type'];
	$data->users[$_GET['id']]->email = $_POST['email'];
	$data->users[$_GET['id']]->classes = explode(',',$_POST['class']);

	file_put_contents($filename, json_encode($data));

	header("location:user_admin.php");
}

if(isset($_GET['action'])){
	if ($_GET['action'] == 'delete') {
		array_splice($data->users, $_GET['id'],1);
		file_put_contents($filename, json_encode($data));

		header("location:user_admin.php");
	}
}

function showUser($user){

$id = $_GET['id'];
$classes = implode(",",$user->classes);
echo <<<HTML
<div class="card">

	<div class="flex-parent add-margin-2">
		<h2 class="flex-child">Edit User</h2>
		<div class="flex-none">
			[<a href='user_admin.php?id=$id&action=delete'>Delete</a>]
		</div>
	</div>

	<form class="input-form" method="post" id="form1">
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Name</p>
			<input type="text" name="name" value='$user->name'>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Type</p>
			<input type="text" name="type" value='$user->type'>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Email</p>
			<input type="text" name="email" value='$user->email'>
		</div>
		<div class="flex-parent flex-align-center add-margin-2">
			<p class="flex-child">Class</p>
			<input type="text" name="class" value='$classes'>
		</div>
		<button type="submit" form="form1" value="Submit" class="button add-margin-1" style="width: 100%;">Submit</button>
		<button class="button" onclick="location.href='user_admin.php'" type="button" class="button" style="width: 100%; filter: grayscale(1) opacity(0.6);">Cancel</button>
	</form>
</div>


HTML;
}

// print_p($data); 


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
	<div class="container">	
		<div class="flex-parent" style="padding-top: 2em;">
			<h1 class="flex-child">Manage Users</h1>
			
		</div>


					<?php 
						if (isset($_GET['id'])) {

							showUser($data->users[$_GET['id']]);
						} else {

					 ?>

	 		<div class="userlist card">

				<div class="flex-parent add-margin-2 flex-align-center">

					<div class="flex-child">
						<h2>User Configuration</h2>
					</div>

					<button class="button" onclick="location.href='user_add.php'" type="button" class="button">ADD</button>

				</div>

					<?php 
					foreach ($data->users as $i=> $user) {
						echo "
						<div class='flex-parent'>
							<div class='flex-child'>
								<div class='user-name'>$user->name</div>
								<div class='user-type'>$user->type</div>
							</div>
							<div class='flex-none flex-parent flex-nav flex-align-center'>
								<a href='?id=$i'>Edit</a>
							</div>
						</div>
						<hr>
							";
					}

					 ?>

					 <?php 

					}


					  ?>
		</div>
	</div>
</body>
</html>