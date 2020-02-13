const templater = f => a =>
	(Array.isArray(a)?a:[a])
	.reduce((r,o,i,a)=>r+f(o,i,a),'');

const getAPI = (type,options) => {
	let fd = new FormData();
	for (let i in options)
		fd.append(i,options[i]); 
	// fetch is a promise
	return fetch(
		`data/api.php?type=${type}`,
	{
		method:'POST',
		body:fd
	}
	).then(data=>data.json())
}

const getStore = (s) => {
	return sessionStorage[s]==undefined ? [] :
		JSON.parse(sessionStorage[s]);
}

const setStore = (s,d) => {
	sessionStorage[s] = JSON.stringify(d);
}

const setCartBadge = () => {
	let c = getStore('cart');

	let l = c.reduce((r,o)=>r+o.amount,0);

	$(".badge-cart .badge").html(l||'');
}