<div>
@forelse($circuits as $circuit)
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


									<span class="p-offer">{{$circuit->prix}} <small>DT</small></span>

								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>


					

    @empty
    <div class="col-8 text-center" 
   style=" margin-top: 200px;"><img src="{{asset('asset/images/emotion.png')}}"></div>
    <div>
    <h4 class="title-head text-center" style="margin-bottom: 0px; color: rgb(173, 173, 168);">Désolé nous n'avons trouvé
                aucun résultat</h4>
    </div>
    @endforelse


</div>