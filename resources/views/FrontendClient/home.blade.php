@extends('FrontendClient.master')

@section('styles')
<style>
	/* Import Google font - Poppins */
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

	.wrapper {
		display: flex;
		max-width: 1200px;
		position: relative;
		margin: auto;
	}


	.wrapper i {
		top: 50%;
		height: 44px;
		width: 44px;
		color: #343F4F;
		cursor: pointer;
		font-size: 1.15rem;
		position: absolute;
		text-align: center;
		line-height: 44px;
		background: #fff;
		border-radius: 50%;
		transform: translateY(-50%);
		transition: transform 0.1s linear;
	}

	.wrapper i:active {
		transform: translateY(-50%) scale(0.9);
	}

	.wrapper i:hover {
		background: #f2f2f2;
	}

	.wrapper i#left {
		left: -47px;

	}

	.wrapper i:first-child {
		left: -47px;

	}

	.wrapper i:last-child {
		right: -22px;
	}

	.wrapper .carousel {
		font-size: 0px;
		cursor: pointer;
		overflow: hidden;
		white-space: nowrap;
		scroll-behavior: smooth;
	}

	.carousel.dragging {
		cursor: grab;
		scroll-behavior: auto;
	}

	.carousel.dragging img {
		pointer-events: none;
	}

	.carousel img {
		height: 340px;
		object-fit: cover;
		user-select: none;
		margin-left: 14px;
		margin-right: 10px;
		width: calc(100% / 3);
	}

	.carousel img:first-child {
		margin-left: 0px;
	}

	@media screen and (max-width: 900px) {
		.carousel img {
			width: calc(100% / 2);
		}
	}

	@media screen and (max-width: 550px) {
		.carousel img {
			width: 100%;
		}
	}

	.white {
		width: 179%;
		border-color: #ff9338 !important;
		margin-left: -7%;

	}

	.v-line {
		border-left: 2px solid #f0ad4e;
		height: 78%;
		left: 76%;
		position: absolute;
		top: 105%;
	}
</style>
@endsection


@section('content')
<div class="banner">
	<!-- container -->
	<div class="container">
		<div class="col-md-4 banner-left">
			<section class="slider2">
				<div class="flexslider">
					<ul class="slides">
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
								<img src="{{asset('asset/images/2.jpg')}}" alt="">
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!--FlexSlider-->
		</div>
		<div class="col-md-8 banner-right">
			<div class="sap_tabs">
				<div class="booking-info about-booking-info">
					<h2>Réserver </h2>
				</div>
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<!---->
					<div class="facts about-facts train-facts">
						<div class="booking-form train-form">
							<link rel="stylesheet" href="css/jquery-ui.css" />
							<!---strat-date-piker---->
							<script>
								$(function() {
									$("#datepicker,#datepicker1").datepicker();
								});
							</script>
							<!---/End-date-piker---->
							<!-- Set here the key for your domain in order to hide the watermark on the web server -->

							<div class="online_reservation">
								<div class="b_room">
									<div class="booking_room">
										<div class="reservation">
											<ul>
												<li class="span1_of_1 desti about-desti">
													<h5>Destination</h5>
													<div class="book_date">
														<form>
															<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
															<input type="text" placeholder="Nom de la ville, de la région ou de l'hôtel" class="typeahead1 input-md form-control tt-input" required="">
														</form>
													</div>
												</li>
											</ul>
										</div>
										<div class="reservation">
											<ul>
												<li class="span1_of_1">
													<h5>Date de départ</h5>
													<div class="book_date">
														<form>
															<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
															<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
														</form>
													</div>
												</li>
												<li class="span1_of_1 left">
													<h5>Date d'arrivée</h5>
													<div class="book_date">
														<form>
															<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
															<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
														</form>
													</div>
												</li>
												<li class="span1_of_1 left adult">
													<h5>Adults (18+)</h5>
													<!----------start section_room----------->
													<div class="section_room">
														<select id="country" onchange="change_country(this.value)" class="frm-field required">
															<option value="null">1</option>
															<option value="null">2</option>
															<option value="AX">3</option>
															<option value="AX">4</option>
															<option value="AX">5</option>
															<option value="AX">6</option>
														</select>
													</div>
												</li>
												<li class="span1_of_1 left h-child">
													<h5>Enfant (0-17)</h5>
													<!----------start section_room----------->
													<div class="section_room">
														<select id="country" onchange="change_country(this.value)" class="frm-field required">
															<option value="null">1</option>
															<option value="null">2</option>
															<option value="AX">3</option>
															<option value="AX">4</option>
															<option value="AX">5</option>
															<option value="AX">6</option>
														</select>
													</div>
												</li>
												<li class="span1_of_1 h-rooms">
													<h5>Chambre(s)</h5>
													<!----------start section_room----------->
													<div class="section_room">
														<select id="country" onchange="change_country(this.value)" class="frm-field required">
															<option value="null">1</option>
															<option value="null">2</option>
															<option value="AX">3</option>
															<option value="AX">4</option>
															<option value="AX">5</option>
															<option value="AX">6</option>
														</select>
													</div>
												</li>
												<div class="clearfix"></div>
											</ul>
										</div>
										<div class="reservation">
											<ul>

												<div class="clearfix"></div>
											</ul>
										</div>
										<div class="reservation">
											<ul>
												<li class="span1_of_3">
													<div class="date_btn">
														<form>
															<input type="submit" value="Search" />
														</form>
													</div>
												</li>
												<div class="clearfix"></div>
											</ul>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<!---->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //container -->

</div>
<div class="popular-grids">
	<!-- container -->
	<div class="banner-bottom">
		<!-- container -->

		<!-- //container -->
	</div>
	<div class="container">
		<div class="v-line" style="border-left: 5px solid #f0ad4e;height: 8%;left: 7%;top: 868px;">
		</div>
		<div class="titre">
			<h2>PROMOS <strong>HÔTELS EN TUNISIE </strong></h2>
			<div class="sous-titre">Profiter de nos meilleurs r&eacute;ductions promos d&#39;h&ocirc;tels en Tunisie </div>

		</div>

		<!-- slider -->
		<div class="slider">
			<div class="arrival-grids">
				<ul id="flexiselDemo1">
					@foreach($hotels as $hotel)
					<li>
						<div class="weekend-grid">
							<a href="products.html">
								<img src="{{asset('hotels')}}/{{$hotel->image}}" alt="" />

								<div class="deals-info-grid">
									<div class="deals-grids">
										<div class="col-md-8 deals-rating" style="float: none;">
											<!-- <h3>Lorem ipsum dolor sit amet</h3> -->
											<div style="width: 400%;margin-left: -196%;">
												<h3 class="card-text" style="width: 128%;"> {{ $hotel->name }}</h3>
											</div>
											<div class="etoile" style="margin-left: 14%;width: 90%;">
												@if( $hotel->nb_etoile ==1)
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												@elseif( $hotel->nb_etoile==2)
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												@elseif( $hotel->nb_etoile ==3)
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												@elseif( $hotel->nb_etoile ==4)
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												@else
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												@endif
											</div>



											<div>
												<i class="fa fa-map-marker " aria-hidden="true" style="margin-right: 5px;margin-left: 1px;"></i>
												<span>{{ $hotel->adresse }}</span>
											</div>
											<hr class="white">
											<div class="col-md-4 deals-price" style="width: 100%;">
												@if(($hotel->promo !=null)&&($hotel->date_fin > date('Y-m-d')))

												<?php

												$prixapresremise = (intval($hotel->prix) * intval($hotel->promo)) / 100;

												?>
												<p class="now">{{$hotel->prix}} <small>DT</small></p>
												<p>{{$prixapresremise}} <small>DT</small></p>
												@else
												<p>{{$hotel->prix}} <small>DT</small></p>
												@endif


											</div>
											<div class="v-line">
											</div>

										</div>

										<button class="btn " style="background-color:#f0ad4e;color:white;margin-top: -1%;">Réserver</button>


									</div>
								</div>
							</a>
						</div>

					</li>

					@endforeach

				</ul>
			</div>
		</div>
		<!-- //slider -->
		</br></br>
		<div class="v-line" style="border-left: 5px solid #f0ad4e;height: 8%;left: 7%;top: 1365px;">
		</div>
		<div class="titre">
			<h2>HÔTELS <strong>RÉCOMMANDÉS </strong></h2>
			<div class="sous-titre">Nos id&eacute;es s&eacute;jours pour toutes vos envies</div>
		</div>


		<!-- <a class="btn btn-warning rounded-25 docs-creator" href="/hotels-tunisie/" style="margin-left: 1032px;margin-bottom: 5px;
	"> Plus d'hôtels</a>
		</br> -->



		<div class="slider">
			<div class="arrival-grids">
				<ul id="flexiselDemo5">
					@foreach($hotels as $hotel)
					<li>
						<div class="weekend-grid">
							<a href="products.html">
								<img src="{{asset('hotels')}}/{{$hotel->image}}" alt="" />

								<div class="deals-info-grid">
									<div class="deals-grids">
										<div class="col-md-8 deals-rating">
											<h3 class="card-text" style="width: 135%;"> {{ $hotel->name }}</h3>
											<div class="etoile" style="margin-left: 31%;">
												@if( $hotel->nb_etoile ==1)
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												@elseif( $hotel->nb_etoile==2)
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												@elseif( $hotel->nb_etoile ==3)
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												@elseif( $hotel->nb_etoile ==4)
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												@else
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												@endif
											</div>
											<div classe="adresse" style="margin-left: 31%;">

												<i class="fa fa-map-marker " aria-hidden="true" style="margin-right: 5px;margin-left: 1px;"></i>
												<span>{{ $hotel->adresse }}</span>
											</div>
											<br>



											<center> <button class="btn " style="background-color:#f0ad4e;color:white;margin-left: 60px;">Voir Liste</button></center>


										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</a>
						</div>

					</li>

					@endforeach

				</ul>
			</div>
		</div>


		</br></br>
		<div class="v-line" style="border-left: 5px solid #f0ad4e;height: 8%;left: 7%;top: 1906px;">
		</div>
		<div class="titre">
			<h2>Voyages <strong>À L'ÉTRANGER </strong></h2>
			<div class="sous-titre"> Les recommandations KAYAN voyages nos meilleurs programmes voyages organis&eacute;es</div>

		</div>
		<div class="slider">
			<div class="arrival-grids">
				<ul id="flexiselDemo2">
					@foreach($voyages as $voyage)
					<li>
						<div class="weekend-grid">
							<a href="products.html">
								<img src="{{asset('voyage')}}/{{$voyage->image}}" alt="" />

								<div class="deals-info-grid">
									<div class="deals-grids">
										<div class="col-md-8 deals-rating" style="float: none;">
											<h3 class="card-text" style="width: 166%;"> {{ $voyage->titre }}</h3>
											<hr class="white">


											<div class="info-row" id="prix" style="margin-left: -36%;">
												<h5 style="font-size: 17px;color: rgb(255, 147, 56);font-weight: 700;">

													<p style="color: #ff9338;background-color: transparent">A partir de</p>
													{{ $voyage->prix }} <sup>DT</sup>
												</h5>

											</div>

											<div class="v-line" style="border-left: 2px solid #f0ad4e;height: 64%;left: 76%;position: absolute;top: 44%;">
											</div>




											<button class="btn " style="background-color:#f0ad4e;color:white;margin-left: 100%; margin-top: -23%;">Voir Liste</button>

										</div>

									</div>
								</div>
							</a>
						</div>

					</li>

					@endforeach

				</ul>
			</div>
		</div>


		</br>
		<div class="v-line" style="border-left: 5px solid #f0ad4e;height: 6%;left: 7%;top:2325px;">
		</div>
		<div class="titre">
			<h2>CIRCUIT <strong>EN TUNISIE </strong></h2>

		</div>


		<div class="slider">
			<div class="arrival-grids">
				<ul id="flexiselDemo3">
					@foreach($circuits as $circuit)
					<li>
						<div class="weekend-grid">
							<a href="products.html">
								<img src="{{asset('circuit')}}/{{$circuit->image}}" alt="" />

								<div class="deals-info-grid">
									<div class="deals-grids">
										<div class="col-md-8 deals-rating" style="float: none;">
											<h3 class="card-text" style="width: 166%;"> {{ $circuit->titre }}</h3>
											<hr class="white">


											<div class="info-row" id="prix" style="margin-left: -36%;">
												<h5 style="font-size: 17px;color: rgb(255, 147, 56);font-weight: 700;">

													<p style="color: #ff9338;background-color: transparent">A partir de</p>
													{{ $circuit->prix }} <sup>DT</sup>
												</h5>

											</div>

											<div class="v-line" style="border-left: 2px solid #f0ad4e;height: 64%;left: 76%;position: absolute;top: 44%;">
											</div>




											<button class="btn " style="background-color:#f0ad4e;color:white;margin-left: 100%; margin-top: -23%;">Réserver</button>

										</div>

									</div>
								</div>
							</a>
						</div>

					</li>

					@endforeach

				</ul>
			</div>
		</div>
		<br><br>
		<div class="v-line" style="border-left: 5px solid #f0ad4e;height: 6%;left: 7%;top:2830px;">
		</div>
		<div class="titre">
			<h2>OMRA <strong>2023 </strong></h2>

		</div>
		<div class="slider">
			<div class="arrival-grids">
				<ul id="flexiselDemo4">
					@foreach($omras as $omra)
					<li>
						<div class="weekend-grid">
							<a href="products.html">
								<img src="{{asset('omra')}}/{{$omra->image}}" alt="" />

								<div class="deals-info-grid">
									<div class="deals-grids">
										<div class="col-md-8 deals-rating" style="float: none;">
											<h3 class="card-text" style="width: 166%;font-size: 166%;left: 20;margin-left: 37%;"> {{ $omra->titre }}2023</h3>
											<hr class="white">



											<div class="info-row" id="prix" style="margin-left: -36%;">
												<h5 style="font-size: 17px;color: rgb(255, 147, 56);font-weight: 700;">

													<p style="color: #ff9338;background-color: transparent">A partir de</p>
													{{ $omra->prix }} <sup>DT</sup>
												</h5>

											</div>

											<div class="v-line" style="border-left: 2px solid #f0ad4e;height: 64%;left: 76%;position: absolute;top: 48%;">
											</div>




											<button class="btn " style="background-color:#f0ad4e;color:white;margin-left: 100%; margin-top: -23%;">تسجيل</button>

										</div>

									</div>
								</div>
							</a>
						</div>

					</li>

					@endforeach

				</ul>
			</div>
		</div>
		<!-- //container -->
	</div>
</div>
@endsection

@section('scripts')
<script>
	const carousel = document.querySelector(".carousel"),
		firstImg = carousel.querySelectorAll("img")[0],
		arrowIcons = document.querySelectorAll(".wrapper i");

	let isDragStart = false,
		isDragging = false,
		prevPageX, prevScrollLeft, positionDiff;

	const showHideIcons = () => {
		// showing and hiding prev/next icon according to carousel scroll left value
		let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
		arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
		arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
	}

	arrowIcons.forEach(icon => {
		icon.addEventListener("click", () => {
			let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
			// if clicked icon is left, reduce width value from the carousel scroll left else add to it
			carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
			setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
		});
	});

	const autoSlide = () => {
		// if there is no image left to scroll then return from here
		if (carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

		positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
		let firstImgWidth = firstImg.clientWidth + 14;
		// getting difference value that needs to add or reduce from carousel left to take middle img center
		let valDifference = firstImgWidth - positionDiff;

		if (carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
			return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
		}
		// if user is scrolling to the left
		carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
	}

	const dragStart = (e) => {
		// updatating global variables value on mouse down event
		isDragStart = true;
		prevPageX = e.pageX || e.touches[0].pageX;
		prevScrollLeft = carousel.scrollLeft;
	}

	const dragging = (e) => {
		// scrolling images/carousel to left according to mouse pointer
		if (!isDragStart) return;
		e.preventDefault();
		isDragging = true;
		carousel.classList.add("dragging");
		positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
		carousel.scrollLeft = prevScrollLeft - positionDiff;
		showHideIcons();
	}

	const dragStop = () => {
		isDragStart = false;
		carousel.classList.remove("dragging");

		if (!isDragging) return;
		isDragging = false;
		autoSlide();
	}

	carousel.addEventListener("mousedown", dragStart);
	carousel.addEventListener("touchstart", dragStart);

	document.addEventListener("mousemove", dragging);
	carousel.addEventListener("touchmove", dragging);

	document.addEventListener("mouseup", dragStop);
	carousel.addEventListener("touchend", dragStop);
</script>
<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo1").flexisel({
			visibleItems: 4,
			animationSpeed: 1000,
			autoPlay: false,
			autoPlaySpeed: 900,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 480,
					visibleItems: 1
				},
				landscape: {
					changePoint: 640,
					visibleItems: 2
				},
				tablet: {
					changePoint: 768,
					visibleItems: 3
				}
			}
		});
	});
</script>
<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo2").flexisel({
			visibleItems: 4,
			animationSpeed: 1000,
			autoPlay: false,
			autoPlaySpeed: 3000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 480,
					visibleItems: 1
				},
				landscape: {
					changePoint: 640,
					visibleItems: 2
				},
				tablet: {
					changePoint: 768,
					visibleItems: 3
				}
			}
		});
	});
</script>
<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo4").flexisel({
			visibleItems: 3,
			animationSpeed: 1000,
			autoPlay: false,
			autoPlaySpeed: 3000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 480,
					visibleItems: 1
				},
				landscape: {
					changePoint: 640,
					visibleItems: 2
				},
				tablet: {
					changePoint: 768,
					visibleItems: 3
				}
			}
		});
	});
</script>
<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo3").flexisel({
			visibleItems: 3,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 800,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 480,
					visibleItems: 1
				},
				landscape: {
					changePoint: 640,
					visibleItems: 2
				},
				tablet: {
					changePoint: 768,
					visibleItems: 3
				}
			}
		});
	});
</script>
<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo5").flexisel({
			visibleItems: 3,
			animationSpeed: 1000,
			autoPlay: false,
			autoPlaySpeed: 3000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 480,
					visibleItems: 1
				},
				landscape: {
					changePoint: 640,
					visibleItems: 2
				},
				tablet: {
					changePoint: 768,
					visibleItems: 3
				}
			}
		});
	});
</script>
<script type="text/javascript" src="{{asset('asset/js/jquery.flexisel.js')}}"></script>


<!--<script src="js/swiper-bundle.min.js"></script>-->
<!--<script src="js/script.js"></script>-->
@endsection