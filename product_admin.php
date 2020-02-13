<?php  

require_once "lib/php/helper.php";
$conn = makeConn();

// $filename = "data/json_notes.json";
// $data = get_json($filename);


// print_p($_GET);
// print_p($_POST);

$empty_product = (object)[
	"name"=>"WH-1000MX3 Wireless Headphones",
	"brand"=>"Sony",
	"price"=>"279.00",
	"category"=>"Headphones",
	"description"=>"Experience the next level of silence - .The noise canceling technology in the WH-1000XM3 headphones is our most advanced ever with close fitting ear pads and our HD Noise Canceling Processor QN1.LDAC transmits approximately three times more data than conventional bluetooth wireless audio.",
	"model_number"=>"MDR-Z7",
	"feature"=>"Authentic sound with aluminum-coated LCP,Dual layer balanced cable,Beat Response Control",
	"driver"=>"Responsive Liquid Crystal Polymer",
	"freq_response"=>"4 Hz-100kHz",
	"file_support"=>"N/A",
	"dimension"=>"8.6 x 6.3 x 9.2 in",
	"weight"=>"11.80",
	"color"=>"Black",
	"image_main"=>"img/Sony-wh1000xm3.jpg",
	"image_banner"=>"Sony-wh1000xm3-b.png",
	"image_other"=>"Sony-wh1000xm3-2.jpg,Sony-wh1000xm3-3.jpg,Sony-wh1000xm3-4.jpg"
];


if (isset($_GET['action'])) {
	if($_GET['action']=='update'){

	$statement = $conn->prepare("UPDATE `product` SET
	`name`=?,
	`brand`=?,
	`price`=?,
	`category`=?,
	`description`=?,
	`model_number`=?,
	`feature`=?,
	`driver`=?,
	`freq_response`=?,
	`file_support`=?,
	`dimension`=?,
	`weight`=?,
	`color`=?,
	`image_main`=?,
	`image_banner`=?,
	`image_other`=?,
	`date_modify`=NOW()
	WHERE `id`=?
	");

	$statement->bind_param("ssdssssssssdssssi",
		$_POST["name"],
		$_POST["brand"],
		$_POST["price"],
		$_POST["category"],
		$_POST["description"],
		$_POST["model_number"],
		$_POST["feature"],
		$_POST["driver"],
		$_POST["freq_response"],
		$_POST["file_support"],
		$_POST["dimension"],
		$_POST["weight"],
		$_POST["color"],
		$_POST["image_main"],
		$_POST["image_banner"],
		$_POST["image_other"],
		$_GET['id']
	);

	$statement->execute();
	if($conn->errno) die($conn->error);

	header("location:product_admin.php?id={$_GET['id']}");
}

	if($_GET['action'] == 'create') {
		$statement = $conn->prepare("INSERT INTO `product`
			(
				`name`,
				`brand`,
				`price`,
				`category`,
				`description`,
				`model_number`,
				`feature`,
				`driver`,
				`freq_response`,
				`file_support`,
				`dimension`,
				`weight`,
				`color`,
				`image_main`,
				`image_banner`,
				`image_other`,
				`date_modify`,
				`date_create`
			)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW(),NOW())
			");
		$statement->bind_param("ssdssssssssdssss",
			$_POST["name"],
			$_POST["brand"],
			$_POST["price"],
			$_POST["category"],
			$_POST["description"],
			$_POST["model_number"],
			$_POST["feature"],
			$_POST["driver"],
			$_POST["freq_response"],
			$_POST["file_support"],
			$_POST["dimension"],
			$_POST["weight"],
			$_POST["color"],
			$_POST["image_main"],
			$_POST["image_banner"],
			$_POST["image_other"]
		);
		$statement->execute();
		if($conn->errno) die($conn->error);
		$id = $conn->insert_id;

		header("location:product_admin.php?id=$id");
	}

	if($_GET['action'] == 'delete'){
		$statement = $conn->prepare("DELETE FROM `product` WHERE `id`=?");
		$statement->bind_param("i",$_GET['id']);
		$statement->execute();

		header("location:product_admin.php");
	}
}

function makeListItemTemplate($carry,$item){
return $carry. <<<HTML

<div class="itemlist-item flex-parent" style="padding: 0.2em;">
	<a class="flex-none product-thumbs" href="product-item.php?id=$item->id">
			<img src="$item->image_main" class="media-image">
	</a>
	<div class="flex-child" style="padding-top: 0.8em; margin-left: 1em;">
			<div style="font-size: 1em;">$item->name</div>
			<div style="font-size: 0.8em; color: gray;">$item->brand</div>
			<div style="font-size: 0.8em;"><b>USD $item->price</b></div>
	</div>
	<div class='flex-none'>
		<div><a href='?id=$item->id' style="font-size: 0.8em;padding-top:0.9em; color: gray;">EDIT</a></div>
	</div>
</div>




HTML;
}



function makeProductForm($o){

$id = $_GET['id'];
$addoredit = $id=='new' ? 'Add' : 'Edit';
$createorupdate = $id=='new' ? 'create' : 'update'; 

echo <<<HTML
<div class="card">

	<div class="flex-parent add-margin-2">
		<h2 class="flex-child">$addoredit Product</h2>
		<div class="flex-none">
			[<a href='product_admin.php?id=$id&action=delete'>Delete</a>]
		</div>
	</div>

	<form class="input-form" action="?id=$id&action=$createorupdate" method="post">
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Name</p>
			<input id="name" type="text" name="name" value='$o->name'>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Brand</p>
			<input id="brand" type="text" name="brand" value='$o->brand'>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Price</p>
			<input id="price" type="number" min="1" max="3000" step="0.01" name="price" value='$o->price'>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Category</p>
			<input id="category" type="text" name="category" value='$o->category'>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Description</p>
			<textarea id="description" type="text" name="description">$o->description</textarea>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Model Number</p>
			<input id="model_number" type="text" name="model_number" value='$o->model_number'>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Feature</p>
			<textarea id="feature" type="text" name="feature">$o->feature</textarea>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Driver</p>
			<textarea id="driver" type="text" name="driver">$o->driver</textarea>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Freq. Response</p>
			<input id="freq_response" type="text" name="freq_response" value='$o->freq_response'>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">File Support</p>
			<input id="file_support" type="text" name="file_support" value='$o->file_support'>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Dimension</p>
			<input id="dimension" type="text" name="dimension" value='$o->dimension'>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Weight</p>
			<input id="weight" type="number"  min="1" max="100" step="0.01" name="weight" value='$o->weight'>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Color</p>
			<input id="color" type="text" name="color" value='$o->color'>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Main Image</p>
			<input id="image_main" type="text" name="image_main" value='$o->image_main'>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Banner Image</p>
			<input id="image_banner" type="text" name="image_banner" value='$o->image_banner'>
		</div>
		<div class="flex-parent flex-align-center add-margin-1">
			<p class="flex-child">Other Images</p>
			<input id="image_other" type="text" name="image_other" value='$o->image_other'>
		</div>

		<button type="submit" value="Submit" class="button add-margin-1" style="width: 100%;">Submit</button>
		<button class="button" onclick="location.href='product_admin.php'" type="button" class="button" style="width: 100%; filter: grayscale(1) opacity(0.6);">Cancel</button>
	</form>
</div>

HTML;
}

// print_p($data); 


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Admin</title>


	<link rel="stylesheet" href="common/common.css">
	<link rel="stylesheet" href="css/admin.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,400,700|Roboto+Condensed:200,400,700&display=swap" rel="stylesheet">

	<script src="lib/jquery-3.4.1.min.js"></script>
	<script src="js/helper.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product.js"></script>

</head>
<body>
	<header class="navbar">
		<div class="navbar-wrapper flex-align-center flex-parent">
			<div class="flex-child">
				<a href="product_admin.php">
					<p><strong>Gagito</strong>  | Admin</p>
				</a>
				
			</div>
			<div class="flex-none">
				<a href="product_admin.php" style="margin-right: 2em;">Product</a>
				<a href="product-list.php">Exit</a>
			</div>
	
		</div>
	</header>
	<div class="container">	
		<div class="flex-parent" style="padding-top: 2em;">
			<h1 class="flex-child">Manage Product</h1>
			
		</div>

				
		<div class="userlist card">


			<?php 

			if(isset($_GET['id'])){

				if($_GET['id']=='new') {
					makeProductForm( $empty_product );} 
				else {
				$data = makeQuery($conn,
					"SELECT * FROM `product` WHERE `id`='{$_GET['id']}'");
				makeProductForm( $data[0] );
				}

			} else {

	

			 ?>
	 			<div class="flex-parent add-margin-2 flex-align-center">

				<div class="flex-child">
					<h2>Product Configuration</h2>
				</div>

				<button class="button" onclick="location.href='product_admin.php?id=new'" type="button" class="button">ADD</button>

			</div>


			 <div class="itemlist">
			 	<?php 

			 	$data = makeQuery($conn,"SELECT * FROM `product`");

			 	echo array_reduce($data, 'makeListItemTemplate');

			 	 ?>
			 </div>

			 <?php 
			 	}
			  ?>

		</div>
	</div>
</body>
</html>