<?php

require_once "lib/php/helper.php";

$data = get_json("data/json_notes.json");

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

		<div class="card">
			<h2 class="align-center add-margin-2">Add User</h2>
			<form class="input-form" action="action_page.php" method="post" id="form1">
				<div class="flex-parent flex-align-center add-margin-1">
					<p class="flex-child">Name</p>
					<input type="text" name="name" placeholder="John Smith (required)" required>
				</div>
				<div class="flex-parent flex-align-center add-margin-1">
					<p class="flex-child">Type</p>
					<input type="text" name="type" placeholder="Student">
				</div>
				<div class="flex-parent flex-align-center add-margin-1">
					<p class="flex-child">Email</p>
					<input type="text" name="email" placeholder="myemail@gagito.com">
				</div>
				<div class="flex-parent flex-align-center add-margin-2">
					<p class="flex-child">Class</p>
					<input type="text" name="classes" placeholder="608,601">
				</div>
				<button type="submit" form="form1" value="Submit" class="button add-margin-1" style="width: 100%;">Submit</button>
				<button class="button" onclick="location.href='user_admin.php'" type="button" class="button" style="width: 100%; filter: grayscale(1) opacity(0.6);">Cancel</button>
			</form>


		</div>



	</div>