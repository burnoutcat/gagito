const showList = d=>{
		$(".all-product-list")
		.html(productListTemplate(d.result))
}

$(()=>{

	setCartBadge();
	
	$("#list-search-form").on("submit",function(e){
		e.preventDefault();

		let s = $(".list-search").val();
		
		console.log(s);
		document.getElementById("return").innerHTML = s;

		getAPI(10,{search:s})
		.then(showList)
	});

	$(".list-filter").on("click",function(e){
		let v =$(this).data("value");
		console.log(v);
		document.getElementById("return").innerHTML = v;

		(

			v=="" ?
			getAPI(1) :
			getAPI(3,{category:v}) 
		).then(showList);
	});

	$(".brand-filter").on("click",function(e){
		let v =$(this).data("value");
		console.log(v);
		document.getElementById("return").innerHTML = v;

		(

			v=="" ?
			getAPI(1) :
			getAPI(30,{brand:v}) 
		).then(showList);
	})

	$(".list-sort").on("change",function(e){
		let v = this.value;
		console.log(v);

		(

			v==1 ?
			getAPI(20,{sort:'date_create',dir:'DESC'}) :
			v==2 ?
			getAPI(20,{sort:'date_create',dir:'ASC'}) :
			v==3 ?
			getAPI(20,{sort:'price',dir:'ASC'}) :
			v==4 ?
			getAPI(20,{sort:'price',dir:'DESC'}) :

			getAPI(1)
		).then(showList);
	})

	$(".js-add-to-cart").on("click",function(e){
		let c = getStore('cart');
		let id = $(this).data("id");
		let p = c.find(o=>o. id==id); 

		if(!p){
			c.push({
				'id':id,
				amount:1
			});
		} else p.amount++;

		setStore('cart',c);
		setCartBadge();

	})

	$(".product-thumbs img").on("mouseenter",function(e){
		let s = $(this).attr("src");
		$(".product-imagemain img").attr("src",s);
	})

});




