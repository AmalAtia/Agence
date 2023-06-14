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
				<div class="col-md-3 product-left"  >
					<div class="h-class">
						<h5>Destination</h5>
						<div class="hotel-price">
							<label class="check">
								<input type="radio" value="Tunis" name="local" onclick="liveSearch_loc()">
								<span class="p-day-grid">Tunis</span>
							</label>
						</div>
						<div class="hotel-price">
							<label class="check">
								<input type="radio" value="Nabeul" name="local" onclick="liveSearch_loc()">
								<span class="p-day-grid">Nabeul</span>
							</label>
						</div>
						<div class="hotel-price">
						<label class="check">
								<input type="radio" value="Hamamet" name="local" onclick="liveSearch_loc()">
								<span class="p-day-grid">Hamamet</span>
							</label>
						</div>
						<div class="hotel-price">
							<label class="check">
								<input type="radio" value="Sousse" name="local" onclick="liveSearch_loc()">
								<span class="p-day-grid">Sousse</span>
							</label>
						</div>
						<div class="hotel-price">
							<label class="check">
								<input type="radio" value="Monastir" name="local" onclick="liveSearch_loc()">
								<span class="p-day-grid">Monastir</span>
							</label>
						</div>
						<div class="hotel-price">
							<label class="check">
								<input type="radio" value="Mahdia" name="local" onclick="liveSearch_loc()">
								<span class="p-day-grid">Mahdia</span>
							</label>
						</div>
						<div class="hotel-price">
						<label class="check">
								<input type="radio" value="Gafsa" name="local" onclick="liveSearch_loc()">
								<span class="p-day-grid">Gafsa</span>
							</label>
						</div>
						<div class="hotel-price">
						<label class="check">
								<input type="radio" value="Bizert" name="local" onclick="liveSearch_loc()">
								<span class="p-day-grid">Bizert</span>
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

				<div class="col-md-9 product-right" id="produitSansFiltre1">
				@foreach($circuits as $circuit)
					<div class="product-right-grids">
						<div class="product-right-top">
							<div class="p-left">
								<div class="p-right-img">


									<a href="{{ route('circuit.client.show',$circuit->id) }}"><img src="{{asset('circuit')}}/{{$circuit->image}}" alt="" style="min-height: 150px; background-size: cover; display: block; width: 100%; height:35%;">

									</a>



								</div>
							</div>
							<div class="p-right">
								<div class="col-md-6 p-right-left">
									<h4 class="card-text" style="color:#1e91a5"><strong> {{ $circuit->titre }}</strong></h4>
									<p class="card-text">{{ $circuit->description }}</p>

								</div>
								<div class="col-md-6 p-right-right">
								<a href="{{route('favorisCircuit.index',$circuit)}}"><i class="fa-regular fa-heart" ></i><span class="tooltipp"></span></a></br></br>


									<span class="p-offer">{{$circuit->prix}} <small>DT</small></span>

								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>


					@endforeach


				</div>

				<div class="col-md-9 product-right" id="produitFiltre1">





				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //container -->
</div>
@endsection

@section('scripts')

<!-- <script>
    console.log('test');



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
        // for (var j = 0; j < cards.length; j++) {

        //     if (cards[j].getElementsByClassName('etoliess')[0]) {
        //         x = cards[j].getElementsByClassName('etoliess')[0].innerText.toLowerCase().toString();
        //         if (search_query.includes(x.trim())) {
        //             rslt.push(cards[j].id);
        //         } else {
        //             //cards[j].classList.add("is-hidden");
        //         }
        //     }
        // }

        // return rslt;
    }
</script> -->

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
					$('#produitSansFiltre1').hide(); //cette ecriture avec jQuery

					$('#produitFiltre1').show();
					$('#produitFiltre1').html(res);
				}
			});
		});


	})
</script>
<!-- <script>
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
</script> -->

@endsection