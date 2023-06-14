@extends('FrontendClient.master')
@section('styles')
<style>
	#st-2 {
		position: fixed;
		top: 35%;
		transform: translateY(-50%);
		right: 0;
		z-index: 555;
		text-align: center;
	}








	.pt-md-5 {
		padding-top: 3rem !important;
	}

	.mt-md-5 {
		margin-top: 3rem !important;
	}







	.pt-md-5 {
		padding-top: 3rem !important;
	}

	.mt-md-5 {
		margin-top: 3rem !important;
	}

	.pt-3 {
		padding-top: 1rem !important;
	}

	* {
		-webkit-text-size-adjust: none;
		text-size-adjust: none;
	}

	*,
	::after,
	::before {
		box-sizing: border-box;
	}

	feuille de style user-agent section {
		display: block;
	}

	body {
		margin: 0;
		font-family: "Poppins", sans-serif;
		font-size: 14px;
		font-weight: 400;
		line-height: 1.5;
		color: #212529;
		text-align: left;
		background-color: #fff;
	}

	.mt-100 {
		margin-top: 50px;
	}

	.container {
		max-width: 1280px;
	}

	.h2 {
		font-size: 30px;
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	.h1,
	.h2,
	.h3,
	.h4,
	.h5,
	.h6 {
		margin-bottom: 0.5rem;

		font-family: "Roboto Condensed", sans-serif;
		font-weight: 700;
		line-height: 1.5;
	}

	.horizontal-line-5 {
		border-top: 3px solid #fc3;
		width: 5%;
		margin-bottom: 16px;
	}

	p {
		margin-top: 0;
		margin-bottom: 1rem;
	}

	h3,
	.h3 {
		font-size: 22px;
	}

	.py-3 {
		padding-top: 1rem !important;
		padding-bottom: 1rem !important;
	}
</style>
<style>
	.carousel {
		position: relative;
	}

	.carousel-inner {
		position: relative;
		width: 100%;
		overflow: hidden;
	}

	.w-100 {
		width: 100% !important;
	}

	.d-block {
		display: block !important;
	}

	img,
	svg {
		vertical-align: middle;
	}

	.carousel-item-next,
	.carousel-item-prev,
	.carousel-item.active {
		display: display;
	}

	.carousel-item {
		position: relative;
		display: none;
		float: left;
		width: 100%;
		margin-right: -100%;
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;
		transition: transform .6s ease-in-out;
	}

	[type=button]:not(:disabled),
	[type=reset]:not(:disabled),
	[type=submit]:not(:disabled),
	button:not(:disabled) {
		cursor: pointer;
	}

	.carousel-control-next,
	.carousel-control-prev {
		background: #000;
		border: 0;
		opacity: 0.5;
		transition: opacity 0.15s ease;
		width: 65px;
		height: 65px;
		border-radius: 100%;
		top: 40%;
		margin: 18px;
	}

	.carousel-control-prev {
		left: 0;
	}

	.carousel-control-next,
	.carousel-control-prev {
		position: absolute;
		bottom: 0;
		z-index: 1;
		display: flex;
		align-items: center;
		justify-content: center;
		width: 15%;
		padding: 0;
		color: #fff;
		text-align: center;
		background: 0 0;
		border: 0;
		opacity: .5;
		transition: opacity .15s ease;

	}

	button,
	select {
		text-transform: none;
	}

	.carousel-control-prev-icon {
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
	}

	.carousel-control-next-icon,
	.carousel-control-prev-icon {
		display: inline-block;
		width: 2rem;
		height: 2rem;
		background-repeat: no-repeat;
		background-position: 50%;
		background-size: 100% 100%;
	}

	.carousel-control-next,
	.carousel-control-prev {
		background: #000;
		border: 0;
		opacity: 0.5;
		transition: opacity 0.15s ease;
		width: 40px;
		height: 40px;
		border-radius: 100%;
		top: 40%;
		margin: 18px;

	}

	.carousel-control-next {
		right: 0;
	}

	.carousel-control-next-icon {
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
	}

	.position-relative {
		position: relative !important;
	}

	*,
	::after,
	::before {
		box-sizing: border-box;
	}

	.container {
		max-width: 1280px;
	}

	.align-items-center {
		align-items: center !important;
	}

	.g-md-2,
	.gx-md-2 {
		--bs-gutter-x: 0.5rem;
	}

	.g-0,
	.gy-0 {
		--bs-gutter-y: 0;
	}

	.row {
		--bs-gutter-x: 1.5rem;
		--bs-gutter-y: 0;
		display: flex;
		flex-wrap: wrap;
		margin-top: calc(-1 * var(--bs-gutter-y));
		margin-right: calc(-.5 * var(--bs-gutter-x));
		margin-left: calc(-.5 * var(--bs-gutter-x));
	}

	.align-self-center {
		align-self: center !important;
	}

	.col-md-12 {
		flex: 0 0 auto;
		width: 100%;
	}

	.row>* {
		flex-shrink: 0;
		width: 100%;
		max-width: 100%;
		padding-right: calc(var(--bs-gutter-x) * .5);
		padding-left: calc(var(--bs-gutter-x) * .5);
		margin-top: var(--bs-gutter-y);
	}

	.shadow-md {
		box-shadow: 0 2px 8px rgb(0 0 0 / 10%);
	}

	.card {
		border: #fff;
		border-radius: 0rem !important;
		transition: 0.5s ease;
	}

	.bg-opacity-dark {
		background-color: rgb(0 0 0 / 60%);
	}

	.card {
		position: relative;
		display: flex;
		flex-direction: column;
		min-width: 0;
		word-wrap: break-word;
		background-color: #fff;
		background-clip: border-box;
		border: 1px solid rgba(0, 0, 0, .125);
		border-radius: 0.25rem;
	}

	.p-md-3 {
		padding: 1rem !important;
	}

	.d-lg-none {
		display: none !important;
	}

	.d-md-none {
		display: none !important;
	}

	.mb-2 {
		margin-bottom: 0.5rem !important;
	}

	.col-md-12 {
		flex: 0 0 auto;
		width: 100%;
	}

	.text-white {
		--bs-text-opacity: 1;
		color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
	}

	[role=button] {
		cursor: pointer;
	}

	a {
		color: #00327b;
		text-decoration: none;
		background-color: transparent;
	}

	.g-md-2,
	.gx-md-2 {
		--bs-gutter-x: 0.5rem;
	}

	.collapse:not(.show) {
		display: none;
	}

	.px-md-3 {
		padding-right: 1rem !important;
		padding-left: 1rem !important;
	}

	* {
		-webkit-text-size-adjust: none;
		/* text-size-adjust: none; */
	}

	text-white {
		--bs-text-opacity: 1;
		color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
	}

	.p-0 {
		padding: 0 !important;
	}

	.list-unstyled {
		padding-left: 0;
		list-style: none;
	}

	dl,
	ol,
	ul {
		margin-top: 0;
		margin-bottom: 1rem;
	}

	.c-last-search-items ul li {
		padding: 2px 0;
		cursor: pointer;
		border-bottom: 2px solid transparent;
		transition: all ease .3s;
		width: auto;
		display: table;
	}

	.text-center {
		text-align: center !important;
	}

	.btn-more {
		color: #fff;
		background-color: #b7cd3b;
		border-color: #b7cd3b;
		display: inline-block;
		font-weight: 400;
		font-size: 12px;
		text-align: center;
		vertical-align: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		border: 1px solid transparent;
		padding: 5px 10px;
		line-height: 1.5;
		border-radius: 5px;
		box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
		transition: box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
	}

	.h-55 {
		height: 55px;
	}

	.btn-block {
		display: block;
		width: 100%;
	}

	.btn-lg,
	.btn-group-lg>.btn {
		padding: 12px 1rem;
		font-size: 1.25rem;
		line-height: 1.5;
		border-radius: 0rem;
	}

	.btn-secondary {
		color: #fff;
		background-color: #b7cd3b;
		border-color: #b7cd3b;
	}
</style>

@endsection
@section('content')
<section class="position-relative">

	<div id="carouselExampleControls" class="carousel slide hidden-sm" data-bs-ride="carousel">

		<div class="carousel-inner">


			<div class="carousel-item">
				<img src="{{asset('asset/images/rania.jpg')}}" class="d-block w-100" alt="...">
			</div>

			<div class="carousel-item active">
				<img src="{{asset('asset/images/imen.jpg')}}" class="d-block w-100" alt="...">
			</div>

		</div>
		<div class="col-md-5 banner-right" style=" margin-top: -8%;margin-left: 11%;width: 73%;">
			<div class="sap_tabs">
				<div class="booking-info">
					<h2>Réserver votre billet d'avion</h2>
				</div>
				<form action="{{route('vol.search')}}" method="GET">
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<div class="resp-tabs-list">
							<div style=" margin-top: -2%;">
								<input type="radio" class="resp-tab-item" name="type" value="aller/retour" checked>
								<label><span style="color:white;">Aller /retour</span></label>
							</div>
							<div style="margin-left: 16%;margin-top: -20px;">
								<input type="radio" class="resp-tab-item" name="type" value="aller unique">
								<label><span style="color:white;">Sens unique</span></label>
							</div>
							<div class="clearfix"></div>
						</div>


						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="facts">
									<div class="booking-form">

										<script>
											$(function() {
												$("#datepicker,#datepicker1").datepicker();
											});
										</script>


										<div class="online_reservation">
											<div class="b_room">
												<div class="booking_room">
													<div class="reservation" style="margin-top: -3%;">
														<ul>

															<li class="span1_of_1 desti">
																<h5>Origine</h5>
																<div class="book_date">

																	<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																	<input type="text" name="ville_depart" placeholder="ville de départ" class="typeahead1 input-md form-control tt-input" required="">

																</div>
															</li>
															<li class="span1_of_1 left desti">
																<h5>Destination</h5>
																<div class="book_date">

																	<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																	<input type="text" name="ville_arrive" placeholder="ville d'arrivée" class="typeahead1 input-md form-control tt-input" required>

																</div>
															</li>
															<div class="clearfix"></div>
														</ul>
													</div>
													<div class="reservation">
														<ul>
															<div style="width: 33%;">
																<li class="span1_of_1">
																	<h5>Départ le</h5>
																	<div class="book_date">

																		<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																		<input type="date" name="date_aller" value="Select date">

																	</div>
																</li>
																<li class="span1_of_1 left">
																	<h5>Retour le</h5>
																	<div class="book_date">

																		<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																		<input type="date" name="date_retour" value="Select date">

																	</div>
																</li>
															</div>
															<div style="margin-left: 34%;margin-top: -79px;">
																<li class="span1_of_1 left adult">
																	<h5>Adults </h5>

																	<div class="section_room">
																		<select id="country" onchange="change_country(this.value)" name="nbAdult" class="frm-field required">
																			<option value="1">1</option>
																			<option value="2">2</option>
																			<option value="3">3</option>
																			<option value="4">4</option>
																			<option value="5">5</option>
																			<option value="6">6</option>
																		</select>
																	</div>
																</li>
																<li class="span1_of_1 left children">
																	<h5>Enfants(1-12)</h5>

																	<div class="section_room">
																		<select id="country" onchange="change_country(this.value)" name="nbEnf" class="frm-field required">
																			<option value="0">0</option>
																			<option value="1">1</option>
																			<option value="2">2</option>
																			<option value="3">3</option>
																			<option value="4">4</option>
																			<option value="5">5</option>
																			<option value="6">6</option>
																		</select>
																	</div>
																</li>
																<li class="span1_of_1 economy">
																	<h5>Class</h5>

																	<div class="section_room">
																		<select id="country" onchange="change_country(this.value)" name="type_vol" class="frm-field required">
																			<option value="Economie">Economie</option>
																			<option value="Business">Business</option>
																		</select>
																	</div>
																</li>
															</div>
															<div class="clearfix"></div>
														</ul>
													</div>
													<div class="reservation">
														<ul>
															<li class="span1_of_3">
																<div class="date_btn">
																	<input type="submit" value="Recherche de vol" />
																</div>
															</li>
															<div class="clearfix"></div>
														</ul>
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</form>
			</div>
		</div>


		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden"></span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden"></span>
		</button>

	</div>

</section>



<!-- <div class="banner">

	<div class="container">
		<div class="col-md-4 banner-left">
			<section class="slider2">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="slider-info">
								<img src="{{asset('asset/images/1.jpg')}}" alt="">
							</div>
						</li>
						<li>
							<div class="slider-info">
								<img src="{{asset('asset/images/2.jpg')}}" alt="">
							</div>
						</li>
						<li>
							<div class="slider-info">
								<img src="{{asset('asset/images/3.jpg')}}" alt="">
							</div>
						</li>
						<li>
							<div class="slider-info">
								<img src="{{asset('asset/images/4.jpg')}}" alt="">
							</div>
						</li>
						<li>
							<div class="slider-info">
								<img src="{{asset('asset/images/2.jpg')}}" alt="">
							</div>
						</li>
					</ul>
				</div>
			</section>

		</div>
		<div class="col-md-5 banner-right">
			<div class="sap_tabs">
				<div class="booking-info">
					<h2>Réserver votre billet d'avion</h2>
				</div>
				<form action="{{route('vol.search')}}" method="GET">
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<div class="resp-tabs-list">
							<div>
								<input type="radio" class="resp-tab-item" name="type" value="aller/retour" checked>
								<label><span style="color:white;">Aller /retour</span></label>
							</div>
							<div>
								<input type="radio" class="resp-tab-item" name="type" value="aller unique">
								<label><span style="color:white;">Sens unique</span></label>
							</div>
							<div class="clearfix"></div>
						</div>


						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="facts">
									<div class="booking-form">

										<script>
											$(function() {
												$("#datepicker,#datepicker1").datepicker();
											});
										</script>


										<div class="online_reservation">
											<div class="b_room">
												<div class="booking_room">
													<div class="reservation">
														<ul>
															<li class="span1_of_1 desti">
																<h5>Origine</h5>
																<div class="book_date">

																	<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																	<input type="text" name="ville_depart" placeholder="ville de départ" class="typeahead1 input-md form-control tt-input" required="">

																</div>
															</li>
															<li class="span1_of_1 left desti">
																<h5>Destination</h5>
																<div class="book_date">

																	<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																	<input type="text" name="ville_arrive" placeholder="ville d'arrivée" class="typeahead1 input-md form-control tt-input" required>

																</div>
															</li>
															<div class="clearfix"></div>
														</ul>
													</div>
													<div class="reservation">
														<ul>
															<li class="span1_of_1">
																<h5>Départ le</h5>
																<div class="book_date">

																	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																	<input type="date" name="date_aller" value="Select date">

																</div>
															</li>
															<li class="span1_of_1 left">
																<h5>Retour le</h5>
																<div class="book_date">

																	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																	<input type="date" name="date_retour" value="Select date">

																</div>
															</li>
															<li class="span1_of_1 left adult">
																<h5>Adults </h5>

																<div class="section_room">
																	<select id="country" onchange="change_country(this.value)" name="nbAdult" class="frm-field required">
																		<option value="1">1</option>
																		<option value="2">2</option>
																		<option value="3">3</option>
																		<option value="4">4</option>
																		<option value="5">5</option>
																		<option value="6">6</option>
																	</select>
																</div>
															</li>
															<li class="span1_of_1 left children">
																<h5>Enfants(1-12)</h5>

																<div class="section_room">
																	<select id="country" onchange="change_country(this.value)" name="nbEnf" class="frm-field required">
																		<option value="0">0</option>
																		<option value="1">1</option>
																		<option value="2">2</option>
																		<option value="3">3</option>
																		<option value="4">4</option>
																		<option value="5">5</option>
																		<option value="6">6</option>
																	</select>
																</div>
															</li>
															<li class="span1_of_1 economy">
																<h5>Class</h5>

																<div class="section_room">
																	<select id="country" onchange="change_country(this.value)" name="type_vol" class="frm-field required">
																		<option value="Economie">Economie</option>
																		<option value="Business">Business</option>
																	</select>
																</div>
															</li>
															<div class="clearfix"></div>
														</ul>
													</div>
													<div class="reservation">
														<ul>
															<li class="span1_of_3">
																<div class="date_btn">
																	<input type="submit" value="Recherche de vol" />
																</div>
															</li>
															<div class="clearfix"></div>
														</ul>
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>

</div>
<br><br> -->
<section class="position-relative">
	<div id="st-2" class="hidden-sm">
		<div class="st-btn" data-network="facebook">
			<a target="_blank" href="https://www.facebook.com/traveltodo.tn/" rel="nofollow">
				<img src="{{asset('asset/images/facebook.png')}}" alt="facebook" title="facebook" class="img-fluid">
			</a>
		</div>
		<div class="st-btn st-first" data-network="twitter">
			<a target="_blank" href="https://twitter.com/traveltodo" rel="nofollow">
				<img src="{{asset('asset/images/twitter.png')}}" alt="twitter" title="twitter" class="img-fluid">
			</a>
		</div>
		<div class="st-btn" data-network="instagram">
			<a target="_blank" href="https://www.instagram.com/traveltodo/" rel="nofollow">
				<img src="{{asset('asset/images/instagram.png')}}" alt="instagram" title="instagram" class="img-fluid">
			</a>
		</div>
	</div>
</section>
<br><br>

<section class="pt-md-5  mt-md-5 pt-3">
	<div class="container mt-100">
		<h1 class="h2">Réservez votre Vol &amp; achetez vos billets d’avion aux meilleurs tarifs</h1>
		<div class="horizontal-line-5"></div>
		<p> </p>
		<p>
			Vous êtes en train de planifier votre prochain voyage, pour découvrir une nouvelle destination, pour un voyage en famille, pour une virée entre amis ou pour un voyage d'affaires ? Vous souhaitez dénicher les billets d’avion qui respectent votre budget et qui vous permettent de profiter de votre voyage ? Traveltodo vous propose les meilleures offres et vous facilite la réservation de vos billets d’avion à prix imbattables selon votre plan de voyage et surtout selon votre budget !</p>
		<h2 class="h3">
			Trouvez votre Vol &amp; comparez les meilleures offres</h2>
		<p>
			Au départ des aéroports de la Tunisie et de partout dans le monde, nous vous proposons les meilleures offres des compagnies aériennes nationales et internationales : Tunisair, Nouvelair, Air France, Lufthansa, Qatar Airways Turkish Airlines,… Recherchez vos billets d’avion selon vos critères et vos besoins. Comparez puis selectionnez le vol qui respecte vos dates, vos horaires de départs et d’arrivée et surtout votre budget.</p>
		<h2 class="h3">
			Achetez vos billets d’avion en ligne et voyagez malin</h2>
		<p>
			Vous avez réussi à trouver le vol qui vous convient à prix imbattable sur Traveltodo ! Commandez alors vos billets d’avion et payez-les en ligne en toute sécurité et en quelques clics. Vos billets vous seront envoyés par mail sous forme de billet électronique.</p>
		<p>
			Vous pouvez aussi passer à l’agence Traveltodo la plus proche de chez vous pour finaliser le paiement et la réservation de votre billet d’avion.</p>
		<p>
			Notre conseil : Réservez vos billets d’avion 3 à 6 mois à l'avance et partez à la découverte du monde. Vous profiterez ainsi des meilleures offres possibles vers la destination de vos rêves : Paris, Rome, Londres, Istanbul et plus encore.</p>
		<p>
			N’hésitez pas à nous contacter si vous avez besoin d’aide ou si vous hésitez pour la réservation et l’achat de billet d’avion en ligne.</p>
		<p>
			Traveltodo vous souhaite une bonne recherche et surtout les plus beaux des voyages !</p>
		<p></p>
	</div>
</section>
<section class="py-3">
	<div class="container">
		<h2 class="text-center">Compagnies aériennes</h2>
		<p class="text-center pb-md-4">Réserver un vol pas cher avec la compagnie de choix</p>
		<div class="row  row-cols-lg-3 g-2 g-lg-3 mb-md-4 mb-3">
			<div class="col" style="width: 30%;margin-top: 6%;margin-left:67px;">
				<div class="">
					<img src="{{asset('asset/images/tunisair.jpg')}}" class="figure-img img-fluid" alt="">
				</div>
			</div>
			<div class="col" style="    margin-left:37%;margin-top: -52px;width: 30%;">
				<div class="">
					<img src="{{asset('asset/images/quatar-airways.jpg')}}" class="figure-img img-fluid" alt="">
				</div>
			</div>
			<div class="col" style="width: 30%;margin-left: 69%;margin-top: -52px;">
				<div class="">
					<img src="{{asset('asset/images/turkishairlines.jpg')}}" class="figure-img img-fluid" alt="">
				</div>
			</div>
		</div>
		<div class="row  row-cols-lg-3 g-2 g-lg-3">
			<div class="col" style="width: 30%; margin-top: 9%;margin-left: 102px;">
				<div class="">
					<img src="{{asset('asset/images/logo-RM.png')}}" class="figure-img img-fluid" alt="">
				</div>
			</div>
			<div class="col" style="    width: 30%;margin-top: -4%;margin-left: 37%;">
				<div class="">
					<img src="{{asset('asset/images/emirate.jpg')}}" class="figure-img img-fluid" alt="">
				</div>
			</div>
			<div class="col" style="width: 30%;margin-top: -4%;margin-left: 70%;">
				<div class="">
					<img src="{{asset('asset/images/air.jpg')}}" class="figure-img img-fluid" alt="">
				</div>
			</div>
		</div>
	</div>

</section>


@endsection