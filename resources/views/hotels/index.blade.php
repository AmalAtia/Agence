@extends('Frontend.master')
@section('styles')
<style>
  .btn {
    border: none;
    outline: none;
    padding: 10px 16px;
    background-color: #00d25b;
    cursor: pointer;
    font-size: 20px;
    font-family: unset;
  }
</style>
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card" style="background-color:#fff; border:none; overflow-x: auto;">
    <div class="card-body">

      <div class="pull-left">
        <h2 style="color:black;">Liste des hôtels</h2>
      </div>
      <div class="row">
        <div class="col-lg-12 margin-tb">

          <div class="pull-right" style="float:right; margin-bottom:2%;">
            @can('hotel-create')
            <a class="btn btn-success" href="{{ route('hotels.create') }}" style="background-color: #00d25b;">Ajouter un nouveau hôtel</a>
            @endcan
          </div>
        </div>
      </div>
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif

      <table id="zero_config" class="table table-striped table-bordered">
        <tr>
          <th>#</th>
          <th>image</th>
          <th>nom</th>
          <th>étoiles</th>
          <th>description</th>
          <th>adresse</th>
          <th>Supplement</th>

          <th>prix</th>
          <th>promo</th>
          <th>Début promo</th>
          <th>Fin promo</th>


          <th width="280px">Actions</th>
        </tr>
        @foreach($hotels as $hotel)
        <tr>
          <td>{{ ++$i }}</td>
          <td><img src="{{asset('hotels')}}/{{$hotel->image}}" style="width:110px; height:100px;" alt="Image">
          </td>

          <td>{{ $hotel->name }}</td>
          <td>{{ $hotel->nb_etoile}}</td>
          <td>{{ Str::limit($hotel->short_description,'8','...') }}</td>
          <td>{{ $hotel->adresse }}</td>

          <td>
            <?php
            $supp = json_decode($hotel->supplement_id);
            ?>
            <?php
            $supplements = '';
            if (isset($supp))
              $supplements = \App\Models\Supplement::whereIn('id', $supp)->get();

            ?>

            @if(isset($supplements)&&(!empty($supplements)))
            @foreach($supplements as $sup)
            <i class="fa {{$sup->icon}}"></i>

            @endforeach
            @endif
          </td>


          <td>{{ $hotel->prix }}</td>
          <td>{{ $hotel->promo }}</td>
          <td>{{ $hotel->date_deb }}</td>
          <td>{{ $hotel->date_fin }}</td>

          <td>

            @can('hotel-list')
            <a class="btn btn-info" style="background-color:#8f5fe8;" href="{{ route('hotels.show',$hotel->id) }}"><i class="mdi mdi-eye"></i></a>
            @endcan
            @can('hotel-edit')
            <a class="btn btn-primary" style="background-color: #26a1eb;" href="{{ route('hotels.edit',[$hotel->id]) }}"><i class="mdi mdi-pencil-box-outline"></i></a>
            @endcan
            @csrf

            @can('hotel-delete')
            <button class="btn btn-danger" style="background-color:#fc424a;" data-toggle="modal" data-target="#ModelDelete{{$hotel->id}}"><i class="mdi mdi-delete"></i></button>
            @endcan



          </td>
        </tr>
        <!-- Modal -->
        {{ csrf_field() }}
        <div class="modal fade" id="ModelDelete{{$hotel->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">supprimer hotel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">êtes-vous sûr de vouloir supprimer cet enregistrement
                <b>{{$hotel->id}}</b>?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Annuler') }}</button>
                <a href="{{ route('hotels.destory',$hotel->id) }}" class="btn btn-primary">{{__('supprime') }}</a>
              </div>
            </div>
          </div>
        </div>

        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>







@endsection