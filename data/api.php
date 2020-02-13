<?php 

 require_once "../lib/php/helper.php";


$output = [];

if(!isset($_GET['type'])){
	$output['error'] = "No Type";
}
// $output = makeQuery(
//  		makeConn(),
//  		"SELECT * FROM `product`"
//  	);

else switch($_GET ['type']){
	case 1: $output['result'] = makeQuery(
		makeConn(),
		"SELECT * 
		FROM `product`
		ORDER BY date_create DESC
		limit 15"
	);
	break;
	case 2: 
		if(!isset($_POST['id']))
			$output['error'] = "No ID";
		else $output['result'] = makeQuery(
		makeConn(),
		"SELECT * 
		FROM `product`
		WHERE id = {$_POST['id']}
		"
	); break;
	case 3: 
		if(!isset($_POST['category']))
			$output['error'] = "No Category";
		else $output['result'] = makeQuery(
		makeConn(),
		"SELECT * 
		FROM `product`
		WHERE `category` = '{$_POST['category']}'
		ORDER BY `date_create` DESC
		limit 15
		"
	); break;
	// SEARCH 		
	case 10: 
		if(!isset($_POST['search']))
			$output['error'] = "No Search";
		else $output['result'] = makeQuery(
		makeConn(),
		"SELECT * 
		FROM `product`
		WHERE
		 `name` LIKE  '%{$_POST['search']}%'OR
			`category` LIKE '%{$_POST['search']}%' OR
			`description` LIKE '%{$_POST['search']}%' OR
			`brand` LIKE '%{$_POST['search']}%'
		ORDER BY `date_create` DESC
		limit 15
		"
	); break;
	// SORT	
	case 20: 
		if(!isset($_POST['sort']) || !isset($_POST['dir']))
			$output['error'] = "Incorrect Data";
		else $output['result'] = makeQuery(makeConn(),
		"SELECT * 
		FROM `product`
		ORDER BY `{$_POST['sort']}` {$_POST['dir']}
		limit 15
		"
	); break;
	// Brand
	case 30: 
		if(!isset($_POST['brand']))
			$output['error'] = "No Brand";
		else $output['result'] = makeQuery(
		makeConn(),
		"SELECT * 
		FROM `product`
		WHERE `brand` = '{$_POST['brand']}'
		ORDER BY `date_create` DESC
		limit 15
		"
	); break;	
	//Cart
		case 40: 
		if(!isset($_POST['cart']))
			$output['error'] = "No Cart Item";
		else $output['result'] = makeQuery(
		makeConn(),
		"SELECT * 
		FROM `product`
		WHERE id
		IN ({$_POST['cart']})
		"
	); break;				

	case 4323423: break; 

}

// print_p($output);

echo json_encode(
	$output,
	JSON_UNESCAPED_UNICODE |
	JSON_NUMERIC_CHECK
);
