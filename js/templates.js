const productListTemplate = templater(o=>`
<div class="product-item col-lg-3 col-md-4 col-sm-6">
	 	<a href="product-item.php?id=${o.id}">
	 		<div class="fav">
					<input type="checkbox" id="fav-${o.id}" class="hidden">
				<label for="fav-${o.id}">&hearts;</label>
	 		</div>
	 		<div class="product-image"><img src="${o.image_main}" alt="" class="product-image"></div>
	 		<div class="product-text-wrapper">
	 			<div class="product-brand">
	 				<h3>${o.brand}</h3>
	 			</div>
	 			<div class="product-title">
	 				<h2>${o.name}</h2>
	 			</div>
	 			<div class="product-price">
	 				<h1>USD ${o.price}</h1>
	 			</div>
	 		</div>
	 	</a>
</div>
	`);

const cartListTemplate = o => `
<table class="table">
	<thead>
		<tr>
			<th></th>
			<th>Image</th>
			<th>Name</th>
			<th>Price</th>
			<th>Amount</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody>${cartListItemTemplate(o)}</tbody>
</table>
`;

const cartListItemTemplate = templater(o => `
<tr>
	<td>[<a href="#" class="js-delete-cart-item" data-id="${o.id}">x</a>]</td>
	<td><img src="${o.image_main}" class="product-thumbs"></td>
	<td>${o.name}</td>
	<td>&dollar;<span class="cart-row-price">${o.price.toFixed(2)}</span></td>
	<td><input type="number" value="${o.amount}" min="1" max="10" class="form-input cart-row-amount" data-id="${o.id}"/></td>
	<td>&dollar;<span class="cart-row-total">${o.total.toFixed(2)}</span></td>
</tr>
`);

const makeSelectOptions = (n=1,a=[1,2,3,4,5,6,7,8,9,10]) =>
	[1,2,3,4,5,6,7,8,9,10].reduce((r,o)=>r+`<option ${n==o?'selected':''}>${o}</option>`,"");

const cartDetailTemplate = templater(o =>`
<div class="product-detail flex-parent">
	<div class="cart-item-img">
		<img src="${o.image_main}" alt="">
	</div>
	<div class="cart-item-textwrapper">

		<div class="cart-item-name">
			<h1>${o.name}</h1>
			<h2>${o.brand}</h2>
		</div>

		<div class="cart-item-price">
			<h1>$ <span class="cart-row-total">${o.total.toFixed(2)}</span></h1>
			<h2>Free Ground Shipping</h2>
		</div>

		<div class="form-select-wrapper flex-parent">
			<select class="form-select cart-row-amount" data-id="${o.id}" data-price="${o.price.toFixed(2)}">
			${makeSelectOptions(o.amount)}
			</select>
		</div>	
		<a href="#" class="js-delete-cart-item" data-id="${o.id}">delete</a>
	</div>
</div>


`); 

const cartTotalsTemplate = templater(o => `
	<ul>
		<li>
			<span class="detail-label">Item(s) In Cart</span>
			<span>${o.items}</span>
		</li>
		<li>
			<span class="detail-label">Subtotal</span>
			<span>&dollar;${o.total.toFixed(2)}</span>
		</li>
		<li>
			<span class="detail-label">Shipping</span>
			<span>FREE</span>
		</li>
		<li>
			<span class="detail-label">Estimated Tax</span>
			<span>&dollar;${o.tax.toFixed(2)}</span>
		</li>

		<hr>

		<li>
			<span class="detail-label">Total</span>
			<span>&dollar;${o.aftertax.toFixed(2)}</span>
		</li>
	</ul>
`);

