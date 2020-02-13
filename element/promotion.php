<div class="banner-window" id="banner-window">
	<div class="banner-wrapper container align-center">
		<p>ENDS IN <span id="time"></span> - <b>FREE TWO DAYS SHIPPING WITH $50 AND UP PURCHASE</b></p>
	</div>
</div>

<script>
	var countDownDate = new Date("Dec 25, 2020 01:00:00").getTime();

	var x = setInterval(function(){
		var now = new Date().getTime();
		var distance = countDownDate - now;

		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		if(hours < 10){
			hours = "0" + hours;
		}

		if(minutes < 10){
			minutes = "0" + minutes;
		}

		if(seconds < 10){
			seconds = "0" + seconds;
		}


		document.getElementById("time").innerHTML = days + " DAYS " + hours + ":" + minutes + ":" + seconds;

		if (distance < 0) {
			clearInterval(x);
			document.getElementById("banner-window").style.display = "none";
		}

	},1000); 

	// How to make countdownclock in JS: https://www.w3schools.com/howto/howto_js_countdown.asp

</script>