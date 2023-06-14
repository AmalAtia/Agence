<head>
	<title> KAYAN VOYAGES</title>
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Govihar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Custom Theme files -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

	<link href="{{asset('asset/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
	<link href="{{asset('asset/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="{{asset('asset/css/flexslider.css')}}" type="text/css" media="screen" />
	<!-- <link type="text/css" rel="stylesheet" href="{{asset('asset/css/JFFormStyle-1.css')}}" /> -->
	<link rel="stylesheet" href="{{asset('asset/css/swiper-bundle.min.css')}}" />
	<link rel="stylesheet" href="{{asset('asset/css/all.min.css')}}" />

	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="{{asset('asset/css/swiper-bundle.min.css')}}" />

	<!-- Fontawesome CDN Link -->

	<!-- CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.css">
	<!-- js -->
	<script src="{{asset('asset/js/jquery.min.js')}}"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

	<script src="{{asset('asset/js/modernizr.custom.js')}}"></script>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

	<!-- //js -->
	<!-- fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<style>
		#st-2 {
			position: fixed;
			top: 35%;
			transform: translateY(-50%);
			right: 0;
			z-index: 555;
			text-align: center;
		}

		.dropbtn {
			background-color: #f0ad4e;
			color: white;
			padding: 16px;
			font-size: 16px;
			border: none;
			border-radius: 72px;
			cursor: pointer;
			margin-top: -10%;
		}

		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
			margin-left: -300px;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown-content a:hover {
			background-color: #f0ad4e
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.dropdown:hover .dropbtn {
			background-color: #f0ad4e;
		}
	</style>
	@yield('styles')
	<!-- //fonts -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true // 100% fit in a container
			});
		});
	</script>
	<!--pop-up-->
	<script src="{{asset('asset/js/menu_jquery.js')}}"></script>
	<!--//pop-up-->
</head>

<body>
	<!--header-->
	<div class="header">
		<div class="container ">
			<div class="header-grids">

				<div class="logo">
					<img src="{{asset('assets/images/kayan.png')}}" alt="logo" style="padding: 15px;width: 15%;">

					<span style="margin-top: 40px;margin-left: 58px; color:#1e91a5; font-size: 25px;font-weight: 700;font-family:cursive; font-style:oblique">
						Chaque voyage est le rêve d'une nouvelle naissance</span>
					<img src="{{asset('asset/images/tlf.png')}}" alt="phone traveltodo" title="phone traveltodo" class="img-fluid me-2" style="width: 25px;height: 25px;margin-left: 81px;/* margin-top: 30px; */">
					<a href="tel:99 606 149" class="call">+216 99 606 149</a>

				</div>
				<div class="nav-top">
					<div class="top-nav">
						<span class="menu"><img src="{{asset('asset/images/menu.png')}}" alt="" /></span>
						<ul class="nav1" style="border-bottom:2px solid #eea236;">
							<li class="active" style="background-color:#eea236;/* border:1px solid #eea236; */"><a href="{{ route('client.interface')}}">Acceuil</a></li>
							<li><a href="{{ route('client.amal')}}">Hôtel</a></li>
							<li><a href="{{ route('vol.client')}}">Vol</a></li>
							<li><a href="{{ route('cir.client')}}">Circuit</a></li>
							<li><a href="{{ route('voyage.client')}}">Voyage à l'étranger</a></li>
							<li><a href="{{ route('omra.client')}}">Omra</a></li>
							<li><a href="{{ route('contact.client')}}">Contact </a></li>
							<li><a href="{{ route('livre.client')}}">Livre d'or </a></li>

						</ul>
						<!-- <div class="clearfix"> </div> -->
						<!-- script-for-menu -->
						<script>
							$("span.menu").click(function() {
								$("ul.nav1").slideToggle(300, function() {
									// Animation complete.
								});
							});
						</script>
						<!-- /script-for-menu -->
					</div>
				</div>
				<div class="dropdown-grids">
					<div id="loginContainer">
						<a href="{{route('login')}}"><span>Login</span></a>

					</div>
				</div>

				<!-- button favoris -->

				<!-- <div class="dropdown-grids"> -->
				@php

				$favoriecount = (App\Models\Favoris::count());
				@endphp
				<?php
				$favories = App\Models\Favoris::with('hotel', 'circuit')->get();
				?>

				<div class="dropdown">
					<button class="dropbtn">
						<i class="glyphicon glyphicon-heart-empty"></i>
					</button>
					<!-- <span>favoris</span> -->
					<div class="dropdown-content" style="overflow-y:scroll;height: 600%;">
						<h5 style="color:#1e91a5;text-align: center;"><strong>Favories Hôtels</strong></h5><br>
						<div class="cart-list">
							@foreach($favories as $favorie)

							<div class="product-widget" style="width: 100%">
								@isset($favorie->hotel)
								<!-- <div class="product-img" > -->
								<img src="{{asset('hotels')}}/{{$favorie->hotel->image}}" alt="image" style="width: 30%;">

								<!-- </div> -->

								<!-- <div class=" product-body"> -->

								<h3 style="
										margin-top: -82px;
										margin-left: 30%;
										text-transform: uppercase;
										font-size: 12px;
										font-weight: 700;
										width: 55%;
									">
									<!-- style="margin-left: 90px;margin-top: -78px;float: left;text-transform: uppercase; font-size: 12px; font-weight: 700;" -->

									<a href="{{ route('hotel.clishow',$favorie->hotel->id) }}">

										{{ $favorie->hotel->name }} </a>
								</h3>
								<!-- style="margin-left: 180px; margin-top: -90px;" -->
								<address class="property-address" style="
											margin-left: 35%;
											margin-bottom: 0px;
										">
									<!-- style="margin-right: 5px;margin-left: 1px;" -->
									<i class="fa fa-map-marker " aria-hidden="true"></i>{{ $favorie->hotel->adresse }}
								</address>
								<span style="float: right;margin-right: 20%;margin-top: -6%;">
									{{$favorie->hotel->prix}} <small>DT</small></span>
								@endisset
								<!-- </div> -->
								<!-- <button class="delete"><i class="glyphicon glyphicon-remove"></i></button> -->
								<form action="{{ route('hotels.unfavorite', $favorie->id) }}" method="POST" style="width: 12%;float: right;margin-top: -41px;margin-right: -97px;">
									@csrf
									<!-- style="float: right;margin-top: -198px; "-->
									<button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
								</form>

								<!-- overflow scroll -->
							</div>


							@endforeach

						</div>
						<!-- -------- Favoris circuit---- -->

						<h5 style="color:#1e91a5;text-align: center;"><strong>Favories Circuits</strong></h5><br>
						<div class="cart-list">
							@foreach($favories as $favorie)

							<div class="product-widget" style="width: 100%">

								<!-- <div class="product-img" > -->
								@if($favorie->circuit !=null)
								<img src="{{asset('circuit')}}/{{$favorie->circuit->image}}" alt="image" style="width: 30%;">

								<!-- </div> -->

								<!-- <div class=" product-body"> -->

								<h3 style="
										margin-top: -82px;
										margin-left: 30%;
										text-transform: uppercase;
										font-size: 12px;
										font-weight: 700;
										width: 55%;
									">
									<!-- style="margin-left: 90px;margin-top: -78px;float: left;text-transform: uppercase; font-size: 12px; font-weight: 700;" -->

									<a href="{{ route('circuit.client.show',$favorie->circuit->id) }}">

										{{ $favorie->circuit->titre }} </a>
								</h3>
								<!-- style="margin-left: 180px; margin-top: -90px;" -->
								<!-- <address class="property-address" style="
											margin-left: 35%;
											margin-bottom: 0px;
										">
								 style="margin-right: 5px;margin-left: 1px;" 
									<i class="fa fa-map-marker fa-1" aria-hidden="true"></i>{{ $favorie->circuit->adresse }}
								</address> -->
								<span style="float: right;margin-right: 20%;margin-top: -6%;">
									{{$favorie->circuit->prix}} <small>DT</small></span>
								@endisset
								<!-- </div> -->
								<!-- <button class="delete"><i class="glyphicon glyphicon-remove"></i></button> -->
								<form action="{{ route('circuits.unfavorite', $favorie->id) }}" method="POST" style="width: 12%;float: right;margin-top: -41px;margin-right: -97px;">
									@csrf
									<!-- style="float: right;margin-top: -198px; "-->
									<button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
								</form>

								<!-- overflow scroll -->
							</div>



							@endforeach
						</div>
						<!-- ----favoris omra---- -->

						<h5 style="color:#1e91a5;text-align: center;"><strong>Favories Omra</strong></h5><br>
						<div class="cart-list">
							@foreach($favories as $favorie)

							<div class="product-widget" style="width: 100%">
								@isset($favorie->omra)
								<!-- <div class="product-img" > -->
								<img src="{{asset('omra')}}/{{$favorie->omra->image}}" alt="image" style="width: 30%;">

								<!-- </div> -->

								<!-- <div class=" product-body"> -->

								<h3 style="
										margin-top: -82px;
										margin-left: 30%;
										text-transform: uppercase;
										font-size: 12px;
										font-weight: 700;
										width: 55%;
									">
									<!-- style="margin-left: 90px;margin-top: -78px;float: left;text-transform: uppercase; font-size: 12px; font-weight: 700;" -->

									<a href="{{ route('omra.clishow',$favorie->omra->id) }}">

										{{ $favorie->omra->titre }} </a>
								</h3>
								<!-- style="margin-left: 180px; margin-top: -90px;" -->

								<span style="float: right;margin-right: 20%;margin-top: -6%;">
									{{$favorie->omra->prix}} <small>DT</small></span>
								@endisset
								<!-- </div> -->
								<!-- <button class="delete"><i class="glyphicon glyphicon-remove"></i></button> -->
								<form action="{{ route('omra.unfavorite', $favorie->id) }}" method="POST" style="width: 12%;float: right;margin-top: -41px;margin-right: -97px;">
									@csrf
									<!-- style="float: right;margin-top: -198px; "-->
									<button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
								</form>

								<!-- overflow scroll -->
							</div>

							<hr>
							@endforeach
						</div>


						<!-- ----------Favoris Voyage --------- -->
						<h5 style="color:#1e91a5;text-align: center;"><strong>Favories Voyage</strong></h5><br>
						<div class="cart-list">
							@foreach($favories as $favorie)

							<div class="product-widget" style="width: 100%">
								@isset($favorie->voyage)
								<!-- <div class="product-img" > -->
								<img src="{{asset('voyage')}}/{{$favorie->voyage->image}}" alt="image" style="width: 30%;">

								<!-- </div> -->

								<!-- <div class=" product-body"> -->

								<h3 style="
										margin-top: -82px;
										margin-left: 30%;
										text-transform: uppercase;
										font-size: 12px;
										font-weight: 700;
										width: 55%;
									">
									<!-- style="margin-left: 90px;margin-top: -78px;float: left;text-transform: uppercase; font-size: 12px; font-weight: 700;" -->

									<a href="{{ route('voyage.clishow',$favorie->voyage->id) }}">

										{{ $favorie->voyage->titre }} </a>
								</h3>
								<!-- style="margin-left: 180px; margin-top: -90px;" -->

								<span style="float: right;margin-right: 20%;margin-top: -6%;">
									{{$favorie->voyage->prix}} <small>DT</small></span>
								@endisset
								<!-- </div> -->
								<!-- <button class="delete"><i class="glyphicon glyphicon-remove"></i></button> -->
								<form action="{{ route('voyage.unfavorite', $favorie->id) }}" method="POST" style="width: 12%;float: right;margin-top: -41px;margin-right: -97px;">
									@csrf
									<!-- style="float: right;margin-top: -198px; "-->
									<button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
								</form>

								<!-- overflow scroll -->
							</div>

							<hr>
							@endforeach
						</div>







					</div>


					<!-- <div class="cart-dropdown"> -->






					<!-- </div> -->
				</div>
				<div id="st-2" class="hidden-sm">
					<div class="st-btn" data-network="facebook">
						<a target="_blank" href="https://www.facebook.com/KAYAN.VOYAGES/" rel="nofollow">
							<img src="{{asset('asset/images/facebook.png')}}" alt="facebook" title="facebook" class="img-fluid">
						</a>
					</div>
					<div class="st-btn st-first" data-network="twitter">
						<a target="_blank" href="https://twitter.com/KAYAN.VOYAGES" rel="nofollow">
							<img src="{{asset('asset/images/twitter.png')}}" alt="twitter" title="twitter" class="img-fluid">
						</a>
					</div>
					<div class="st-btn" data-network="instagram">
						<a target="_blank" href="https://www.instagram.com/KAYAN.VOYAGES/" rel="nofollow">
							<img src="{{asset('asset/images/instagram.png')}}" alt="instagram" title="instagram" class="img-fluid">
						</a>
					</div>
				</div>

				<div class="qty" style="
position: relative;right: 61px;top: -23px;width: 20px;height: 20px;line-height: 20px;text-align: center;border-radius: 50%;/* left: 103px; */font-size: 10px;color: #FFF;background-color: #D10024;float: right;	">
					{{ $favoriecount }}



				</div>
				<!-- <a type="button" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> -->

				<!-- ---****--- -->







			</div>

		</div>
	</div>

	<!--//header-->
	<!-- banner -->

	<!-- container -->
	@yield('content')


	<!-- //banner -->

	<!-- banner-bottom -->

	<!-- //banner-bottom -->
	<!-- popular-grids -->

	<!-- popular-grids -->


	<script defer src="{{asset('asset/js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('asset/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>

	@yield('scripts')
	<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/script.js')}}"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script type="text/javascript">
		$(function() {
			SyntaxHighlighter.all();
		});
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>


	<script>
		$('#produitFiltre').hide();

		function liveSearch_cat() {
			let cards = document.querySelectorAll('#produitSansFiltre') //class div hotel
			var elems = document.querySelectorAll('[name=nbrEtoile]')
			var search_query = [];
			var rslt = [];
			for (var i = 0; i < elems.length; i++) {
				if (elems[i].checked) {
					search_query.push(elems[i].value.toString());


				}
			}

			console.log('nbrEtoile', search_query);

			$.ajax({
				url: "/filtreByStars",
				data: {
					'nbrEtoile': search_query,
				},
				type: 'Get', //type de notre url
				dataType: 'html', //type de donnée qui va retourner 
				success: function(data) {
					$('#produitSansFiltre').hide(); //cette ecriture avec jQuery

					$('#produitFiltre').show();
					$('#produitFiltre').html(data);
				}
			});

		}
	</script>


	<script>
		$('#produitFiltre').hide();

		function liveSearch_arrang() {
			let cards = document.querySelectorAll('#produitSansFiltre') //class div hotel
			var elems = document.querySelectorAll('[name=arrangement]')
			var search_query = [];
			var rslt = [];
			for (var i = 0; i < elems.length; i++) {
				if (elems[i].checked) {
					search_query.push(elems[i].value.toString());


				}
			}

			console.log('arrangement', search_query);

			$.ajax({
				url: "/filtreArrangement",
				data: {
					'arrangement': search_query,
				},
				type: 'Get', //type de notre url
				dataType: 'html', //type de donnée qui va retourner 
				success: function(data) {
					$('#produitSansFiltre').hide(); //cette ecriture avec jQuery

					$('#produitFiltre').show();
					$('#produitFiltre').html(data);
				}
			});

		}
	</script>


	<script>
		$('#produitFiltre').hide();

		function liveSearch_local() {

			//get the checked value of radio button 
			$location = $('input[name="localisation"]:checked').val();

			console.log('localisation', $location);

			$.ajax({
				url: "/filtreLocalisation",
				data: {
					'localisation': $location,
				},
				type: 'Get', //type de notre url
				dataType: 'html', //type de donnée qui va retourner 
				success: function(data) {
					$('#produitSansFiltre').hide(); //cette ecriture avec jQuery

					$('#produitFiltre').show();
					$('#produitFiltre').html(data);
				}
			});

		}
	</script>



	<script>
		$('#produitFiltre1').hide();

		function liveSearch_loc() {

			//get the checked value of radio button 
			$local = $('input[name="local"]:checked').val();

			console.log('local', $local);

			$.ajax({
				url: "/filtreLocal",
				data: {
					'local': $local,
				},
				type: 'Get', //type de notre url
				dataType: 'html', //type de donnée qui va retourner 
				success: function(data) {
					$('#produitSansFiltre1').hide(); //cette ecriture avec jQuery

					$('#produitFiltre1').show();
					$('#produitFiltre1').html(data);
				}
			});

		}
	</script>
	<script>
		$('#produitFiltre1').hide();

		function liveSearch_adresse() {

			//get the checked value of radio button 
			$adr = $('input[name="adresse"]:checked').val();

			console.log('adresse', $adr);

			$.ajax({
				url: "/filtreAdresse",
				data: {
					'adresse': $adr,
				},
				type: 'Get', //type de notre url
				dataType: 'html', //type de donnée qui va retourner 
				success: function(data) {
					$('#produitSansFiltre1').hide(); //cette ecriture avec jQuery

					$('#produitFiltre1').show();
					$('#produitFiltre1').html(data);
				}
			});

		}
	</script>

	<script>
		$('#produitFiltre2').hide();

		function liveSearch_destination() {

			//get the checked value of radio button 
			$localisation = $('input[name="localisation"]:checked').val();

			console.log('localisation', $localisation);

			$.ajax({
				url: "/filtreAdresseVoyage",
				data: {
					'localisation': $localisation,
				},
				type: 'Get', //type de notre url
				dataType: 'html', //type de donnée qui va retourner 
				success: function(data) {
					$('#produitSansFiltre2').hide(); //cette ecriture avec jQuery

					$('#produitFiltre2').show();
					$('#produitFiltre2').html(data);
				}
			});

		}
	</script>



























	<script>
		const input_left = document.getElementById("input_left");
		const input_right = document.getElementById("input_right");

		const thumb_left = document.querySelector(".slider > .thumb.left");
		const thumb_right = document.querySelector(".slider > .thumb.right");
		const range = document.querySelector(".slider > .range");

		const set_left_value = () => {

			const _this = input_left;
			const [min, max] = [parseInt(_this.min), parseInt(_this.max)];

			_this.value = Math.min(parseInt(_this.value), parseInt(input_right.value) - 1);

			const percent = ((_this.value - min) / (max - min)) * 100;
			thumb_left.style.left = percent + "%";
			range.style.left = percent + "%";
		};

		const set_right_value = () => {
			const _this = input_right;
			const [min, max] = [parseInt(_this.min), parseInt(_this.max)];

			_this.value = Math.max(parseInt(_this.value), parseInt(input_left.value) + 1);

			const percent = ((_this.value - min) / (max - min)) * 100;
			thumb_right.style.right = 100 - percent + "%";
			range.style.right = 100 - percent + "%";
		};

		input_left.addEventListener("input", set_left_value);
		input_right.addEventListener("input", set_right_value);

		function left_slider(value) {
			document.getElementById('left_value').innerHTML = value;
		}

		function right_slider(value) {
			document.getElementById('right_value').innerHTML = value;
		}
	</script>




	<script>
		// const input_left = document.getElementById("input_left");
		// const input_right = document.getElementById("input_right");

		// const thumb_left = document.querySelector(".slider > .thumb.left");
		// const thumb_right = document.querySelector(".slider > .thumb.right");
		// const range = document.querySelector(".slider > .range");

		// const set_left_value = () => {
		// 	const _this = input_left;
		// 	const [min, max] = [parseInt(_this.min), parseInt(_this.max)];

		// 	_this.value = Math.min(parseInt(_this.value), parseInt(input_right.value) - 1);

		// 	const percent = ((_this.value - min) / (max - min)) * 100;
		// 	thumb_left.style.left = percent + "%";
		// 	range.style.left = percent + "%";
		// };

		// const set_right_value = () => {
		// 	const _this = input_right;
		// 	const [min, max] = [parseInt(_this.min), parseInt(_this.max)];

		// 	_this.value = Math.max(parseInt(_this.value), parseInt(input_left.value) + 1);

		// 	const percent = ((_this.value - min) / (max - min)) * 100;
		// 	thumb_right.style.right = 100 - percent + "%";
		// 	range.style.right = 100 - percent + "%";
		// };

		// input_left.addEventListener("input", set_left_value);
		// input_right.addEventListener("input", set_right_value);

		// function left_slider(value) {
		// 	document.getElementById('left_value').innerHTML = value;
		// }

		// function right_slider(value) {
		// 	document.getElementById('right_value').innerHTML = value;
		// }




		// const input_left = document.getElementById("input_left");
		// const input_right = document.getElementById("input_right");


		// const rangeInput = document.querySelectorAll(".range-input input"),
		// 	priceInput = document.querySelectorAll(".price-input input"),
		// 	range = document.querySelector(".slider .progress");
		// let priceGap = 1000;

		// priceInput.forEach(input => {
		// 	input.addEventListener("input", e => {
		// 		let minPrice = parseInt(priceInput[0].value),
		// 			maxPrice = parseInt(priceInput[1].value);

		// 		if ((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max) {
		// 			if (e.target.className === "input-min") {
		// 				rangeInput[0].value = minPrice;
		// 				range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
		// 			} else {
		// 				rangeInput[1].value = maxPrice;
		// 				range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
		// 			}
		// 		}
		// 	});
		// });

		// rangeInput.forEach(input => {
		// 	input.addEventListener("input", e => {
		// 		let minVal = parseInt(rangeInput[0].value),
		// 			maxVal = parseInt(rangeInput[1].value);

		// 		if ((maxVal - minVal) < priceGap) {
		// 			if (e.target.className === "range-min") {
		// 				rangeInput[0].value = maxVal - priceGap
		// 			} else {
		// 				rangeInput[1].value = minVal + priceGap;
		// 			}
		// 		} else {
		// 			priceInput[0].value = minVal;
		// 			priceInput[1].value = maxVal;
		// 			range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
		// 			range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
		// 		}
		// 	});
		// });

		// $(document).ready(function(e) {
		// 	$('.range_slider').on('change', function() {
		// 		console.log('ttt');
		// 		let left_value = $('#input_left').val();
		// 		let right_value = $('#input_right').val();
		// 		// alert(left_value+right_value);
		// 		$.ajax({
		// 			url: "{{ route('search.hotel.price') }}",
		// 			method: "GET",
		// 			data: {
		// 				left_value: left_value,
		// 				right_value: right_value
		// 			},
		// 			success: function(res) {

		// 				console.log('res',res);
		// 				$('#produitSansFiltre').hide(); //cette ecriture avec jQuery

		// 				$('#produitFiltre').show();
		// 				$('#produitFiltre').html(res);
		// 			}
		// 		});
		// 	});

		// });

		////////////
		// const thumb_left = document.querySelector(".slider > .thumb.left");
		// const thumb_right = document.querySelector(".slider > .thumb.right");
		// const range = document.querySelector(".slider > .range");

		// const set_left_value = () => {
		// 	const _this = input_left;
		// 	const [min, max] = [parseInt(_this.min), parseInt(_this.max)];

		// 	_this.value = Math.min(parseInt(_this.value), parseInt(input_right.value) - 1);

		// 	const percent = ((_this.value - min) / (max - min)) * 100;
		// 	thumb_left.style.left = percent + "%";
		// 	range.style.left = percent + "%";
		// };

		// const set_right_value = () => {
		// 	const _this = input_right;
		// 	const [min, max] = [parseInt(_this.min), parseInt(_this.max)];

		// 	_this.value = Math.max(parseInt(_this.value), parseInt(input_left.value) + 1);

		// 	const percent = ((_this.value - min) / (max - min)) * 100;
		// 	thumb_right.style.right = 100 - percent + "%";
		// 	range.style.right = 100 - percent + "%";
		// };

		// input_left.addEventListener("input", set_left_value);
		// input_right.addEventListener("input", set_right_value);

		// function left_slider(value) {
		// 	document.getElementById('left_value').innerHTML = value;
		// }

		// function right_slider(value) {
		// 	document.getElementById('right_value').innerHTML = value;
		// }
	</script>
	<!-- <script src="{{asset('asset/js/jquery.cookie.js" type="text/javascript')}}"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		 -->
	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="{{asset('asset/JS/swiper-bundle.min.js')}}"></script>
	<script src="{{asset('asset/js/all.min.js')}}"></script>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>

	<div class="footer" style="background-color:white;margin-top: 20%;"> </div>

</body>