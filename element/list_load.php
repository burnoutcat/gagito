<?php

if(isset($_GET['s'])) {

echo <<<HTML
<script>getAPI(10,{search:"{$_GET['s']}"})
.then(showList)</script>
HTML;

}
else 
if(isset($_GET['c'])) {

echo <<<HTML
<script>getAPI(3,{category:"{$_GET['c']}"})
.then(showList);


</script>
HTML;
}

else {

echo <<<HTML
<script>
getAPI(1)
.then(d=>{
	$(".all-product-list")
		.html(productListTemplate(d.result))
});
</script>
HTML;

}