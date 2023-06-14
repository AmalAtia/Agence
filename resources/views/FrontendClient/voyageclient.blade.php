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
			<button class="btn btn-secondary" type="submit" style="background-color:#f0ad4e;color:white;margin-right: 100px;margin-top: 10%;/* margin-right: 5%; */float: revert;">Rechercher</button>
			<!-- background-color:#1e91a5;color:white;margin-right: 100px;margin-top: 10%;/* margin-right: 5%; */float: revert; -->
		</div>
	</div>


</form>
</br></br>

<div class="banner-bottom">
	<!-- container -->
	<div class="container">
		<div class="faqs-top-grids">
			<div class="product-grids">
				<div class="col-md-3 product-left">
					<div class="h-class">
						<h5>Destination</h5>
						<div class="hotel-price">
							<label class="check">
								<input type="radio" value="Algérie" name="localisation" onclick="liveSearch_destination()">
								<span class="p-day-grid">Algérie</span>
							</label>
						</div>
						<div class="hotel-price">
							<label class="check">
								<input type="radio" value="Allemagne" name="localisation" onclick="liveSearch_destination()">
								<span class="p-day-grid">Allemagne</span>
							</label>
						</div>
						<div class="hotel-price">
						<label class="check">
								<input type="radio" value="Australie" name="localisation" onclick="liveSearch_destination()">
								<span class="p-day-grid">Australie</span>
							</label>
						</div>
						<div class="hotel-price">
							<label class="check">
								<input type="radio" value="Canada" name="localisation" onclick="liveSearch_destination()">
								<span class="p-day-grid">Canada</span>
							</label>
						</div>
						<div class="hotel-price">
							<label class="check">
								<input type="radio" value="Égypte" name="localisation" onclick="liveSearch_destination()">
								<span class="p-day-grid">Égypte</span>
							</label>
						</div>
						<div class="hotel-price">
							<label class="check">
								<input type="radio" value="France" name="localisation" onclick="liveSearch_destination()">
								<span class="p-day-grid">France</span>
							</label>
						</div>
						<div class="hotel-price">
						<label class="check">
								<input type="radio" value="Italie" name="localisation" onclick="liveSearch_destination()">
								<span class="p-day-grid">Italie</span>
							</label>
						</div>
						<div class="hotel-price">
						<label class="check">
								<input type="radio" value="Maroc" name="localisation" onclick="liveSearch_destination()">
								<span class="p-day-grid">Maroc</span>
							</label>
						</div>
						<div class="hotel-price">
						<label class="check">
								<input type="radio" value="Qatar" name="localisation" onclick="liveSearch_destination()">
								<span class="p-day-grid">Qatar</span>
							</label>
						</div>
						<div class="hotel-price">
						<label class="check">
								<input type="radio" value="Turquie" name="localisation" onclick="liveSearch_destination()">
								<span class="p-day-grid">Turquie</span>
							</label>
						</div>




					</div>
					<hr>
				
					
					<div class="h-class p-day">
						<h5>Prix</h5>
						
						@include('FrontendClient.sliderp')

					</div>
					</br>
					</br>
					</br>
					<hr>
					
					
					

				</div>

				<div class="col-md-9 product-right" id="produitSansFiltre2">
				@foreach($voyages as $voyage)
					<div class="product-right-grids">
						<div class="product-right-top">
							<div class="p-left">
								<div class="p-right-img">


									<a href="{{ route('voyage.client.show',$voyage->id) }}"><img src="{{asset('voyage')}}/{{$voyage->image}}" alt="" style="min-height: 150px; background-size: cover; display: block; width: 100%; height:35%;">

									</a>


									
								</div>
							</div>
							<div class="p-right">
								<div class="col-md-6 p-right-left">
								<h4 class="card-text" style="color:#1e91a5"><strong> {{ $voyage->titre }}</strong></h4>
								<p class="card-text">{{  $voyage->destination }}</p>
									
								</div>
								<div class="col-md-6 p-right-right">
								<a href="{{route('favorisVoyage.index',$voyage)}}"><i class="fa-regular fa-heart"></i><span class="tooltipp"></span></a></br></br>

								
								<span class="p-offer">{{$voyage->prix}} <small>DT</small></span>

									
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>


					@endforeach



				</div>

				<div class="col-md-9 product-right" id="produitFiltre2">





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
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
</script>
<script>
	$(document).ready(function(e){
           $('.range_slider').on('change',function(){
               let left_value = $('#input_left').val();
               let right_value = $('#input_right').val();
               // alert(left_value+right_value);
               $.ajax({
                   url:"{{ route('search.circuit.price')}}",
                   method:"GET",
                   data:{left_value:left_value, right_value:right_value},
                   success:function(res){
					$('#produitSansFiltre2').hide(); //cette ecriture avec jQuery

					$('#produitFiltre2').show();
					$('#produitFiltre2').html(res);
				}
			});
		});


	})
</script>


@endsection