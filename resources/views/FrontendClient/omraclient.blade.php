@extends('FrontendClient.master')
@section('styles')
<style>
	#rangeValue {
		position: relative;
		text-align: center;
		width: 60px;
		font-size: 1.25em;
		color: #fff;
		background: #27a0ff;
		margin-left: 15px;
		border-radius: 25px;
		font-weight: 500;
		box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1), -5px -5px 10px #fff, inset 5px 5px 10px rgba(0, 0, 0, 0.1), inset -5px -5px 5px rgba(255, 255, 255, 0.05);
	}

	.middle {
		position: relative;
		/* width: 100%; */
		max-width: 500px;
		margin-top: 10px;
		display: inline-block;
	}

	#multi_range {
		margin: 0 auto;
		background-color: #f0ad4e;
		border-radius: 20px;
		margin-top: 20px;
		margin-bottom: 20px;
		text-align: center;
		width: 200px;
		font-weight: 500;
		font-size: 1.25em;
		color: #fff;
	}


	.slider {
		position: relative;
		z-index: 1;
		height: 10px;
		margin: 0 15px;
	}

	.slider>.track {
		position: absolute;
		z-index: 1;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0;
		border-radius: 5px;
		background-color: #b5d7f1;
	}

	.slider>.range {
		position: absolute;
		z-index: 2;
		left: 25%;
		right: 25%;
		top: 0;
		bottom: 0;
		border-radius: 5px;
		background-color: #f0ad4e;
	}

	.slider>.thumb {
		position: absolute;
		z-index: 3;
		width: 30px;
		height: 30px;
		background-color: #f0ad4e;
		border-radius: 50%;
	}

	.slider>.thumb.left {
		left: 25%;
		transform: translate(-15px, -10px);
	}

	.slider>.thumb.right {
		right: 25%;
		transform: translate(15px, -10px);
	}






	.rang_slider::-webkit-slider-thumb {
		pointer-events: all;
		width: 30px;
		height: 30px;
		border-radius: 0;
		border: 0 none;
		background-color: red;
		cursor: pointer;
		-webkit-appearance: none;
	}

	*/ #rangeValue {
		position: relative;
		text-align: center;
		width: 60px;
		font-size: 1.25em;
		color: #fff;
		background: #299617;
		margin-left: 15px;
		border-radius: 25px;
		font-weight: 500;
		box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1), -5px -5px 10px #fff, inset 5px 5px 10px rgba(0, 0, 0, 0.1), inset -5px -5px 5px rgba(255, 255, 255, 0.05);
	}

	.middle {
		position: relative;
		width: 100%;
		max-width: 500px;
		margin-top: 10px;
		display: inline-block;
	}

	.range_slider {
		position: absolute;
		pointer-events: none;
		-webkit-appearance: none;
		z-index: 2;
		height: 10px;
		width: 100%;
		opacity: 0;
	}

	.range_slider::-webkit-slider-thumb {
		pointer-events: all;
		width: 30px;
		height: 30px;
		border-radius: 0;
		border: 0 none;
		background-color: red;
		cursor: pointer;
		-webkit-appearance: none;
	}

	#multi_range {
		margin: 0 auto;
		background-color: #f0ad4e;
		border-radius: 20px;
		margin-top: 20px;
		margin-bottom: 20px;
		text-align: center;
		width: 200px;
		font-weight: 500;
		font-size: 1.25em;
		color: #fff;
	}
</style>
@endsection
@section('content')
</br>
<!-- Search Widget -->

@if(Session::has('message'))
<div class="alert alert-success">
	{{ Session::get('message') }}
</div>
<script>
	// Remove the flash message after 1 second
	setTimeout(function() {
		document.getElementById('flash-message').style.display = 'none';
	}, 1000);
</script>
@endif


<form action="/search" method="GET" role="search">
	{{ csrf_field() }}
	<div class="row col-md-12">
		<div class="col-md-9">
			<div class=" ">
				<input type="text" class="form-control" placeholder="Rechercher..." name="q" style="width: 95%;
    margin-left: 6%;
    margin-top: 3%;">
				<span class="input-group-btn">
				</span>
			</div>
		</div>
		<div class="col-md-3">
			<button class="btn btn-secondary" type="submit" style="background-color:#1e91a5;color:white;margin-right: 100px;margin-top: 10%;/* margin-right: 5%; */float: revert;">Rechercher</button>
			<!-- background-color:#1e91a5;color:white;margin-right: 100px;margin-top: 10%;/* margin-right: 5%; */float: revert; -->
		</div>
	</div>


</form>
</br></br>

<!-- <div class="video-container">
  <video autoplay loop muted>
    <source src="{{asset('asset/images/video.mp4')}}" type="video/mp4">
    Your browser does not support the video tag.
  </video> -->
<div class="banner-bottom">
	<!-- container -->
	<div class="container">
		<div class="faqs-top-grids">
			<div class="product-grids">
				<div class="col-md-3 product-left">

					<div class="h-class p-day">
						<h5>Prix</h5>
						<div>

							@include('FrontendClient.sliderp')
						</div>


					</div>


				</div>

				<div class="col-md-9 product-right" id="produitSansFiltre">
					@foreach($omras as $omra)
					<div class="product-right-grids">
						<div class="product-right-top">
							<div class="p-left">
								<div class="p-right-img">


									<a href="{{ route('omra.client.show',$omra->id) }}"><img src="{{asset('omra')}}/{{$omra->image}}" alt="" style="min-height: 150px; background-size: cover; display: block; width: 100%; height:35%;">

									</a>



								</div>
							</div>
							<div class="p-right">
								<div class="col-md-6 p-right-left">
									<h4 class="card-text" style="color:#1e91a5"><strong> {{ $omra->titre }}</strong></h4>
									<p class="card-text">{{ $omra->description }}</p>

								</div>
								<div class="col-md-6 p-right-right">
									<a href="{{route('favorisOmra.index',$omra)}}"><i class="fa-regular fa-heart"></i><span class="tooltipp"></span></a></br></br>


									@if(($omra->promo !=null)&&($omra->date_fin > date('Y-m-d')))

									<?php

									$prixapresremise = (intval($omra->prix) * intval($omra->promo)) / 100;

									?>
									<span class="p-offer" style="color:red" ;><strong>{{$prixapresremise}}</strong></span><span class="p-last-price">{{$omra->prix}} <small>DT</small></span>
									@else
									<span class="p-offer">{{$omra->prix}} <small>DT</small></span>
									@endif


								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>


					@endforeach


				</div>
				<div class="col-md-9 product-right" id="produitFiltre">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //container -->
</div>

@endsection
@section('scripts')
<script>
	$(document).ready(function(e) {
		$('.range_slider').on('change', function() {
			let left_value = $('#input_left').val();
			let right_value = $('#input_right').val();
			// alert(left_value+right_value);
			$.ajax({
				url: "{{ route('search.omra.price')}}",
				method: "GET",
				data: {
					left_value: left_value,
					right_value: right_value
				},
				success: function(res) {
					$('#produitSansFiltre').hide(); //cette ecriture avec jQuery

					$('#produitFiltre').show();
					$('#produitFiltre').html(res);
				}
			});
		});


	})
</script>
@endsection