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
            @can('chambre-create')
            <a class="btn btn-success" href="{{ route('chambre.create') }}" style="background-color: #00d25b;">Ajouter un nouveau chambre</a>
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
          <th>Image</th>
          <th>Type</th>

          <th>Nombre Adultes</th>
          <th>Nombre Enfants</th>

          <th>Prix par personne</th>

          <th>Hôtel</th>
          <th>Quantités</th>
          <th width="280px">Actions</th>
        </tr>
        @foreach($chambres as $chambre)
        <tr>
          <td>{{ ++$i }}</td>
          <td><img src="{{asset('chambres')}}/{{$chambre->image}}" style="width:110px; height:100px;" alt="Image"></td>

          <td>{{ $chambre->type }}</td>

          <td>{{ $chambre->nb_adult }}</td>
          <td>{{ $chambre->nb_enfant}}</td>




          <td>{{ $chambre->prix_par_personne }}</td>

          <td>{{ isset($chambre->hotel)? $chambre->hotel->name :'--' }}</td>
          <td>{{ $chambre->qte }}</td>

          <td>

            @can('chambre-list')
            <a class="btn btn-info" style="background-color:#8f5fe8;" href="{{ route('chambre.show',$chambre->id) }}" style="background-color: #8f5fe8;"><i class="mdi mdi-eye"></i></a>
            @endcan
            @can('chambre-edit')
            <a class="btn btn-primary" style="background-color: #26a1eb;" href="{{ route('chambre.edit',[$chambre->id]) }}"><i class="mdi mdi-pencil-box-outline"></i></a>
            @endcan
            @csrf
            @method('DELETE')
            @can('chambre-delete')
            <button class="btn btn-danger" style="background-color:#fc424a;" data-toggle="modal" data-target="#ModelDelete{{$chambre->id}}"><i class="mdi mdi-delete"></i></button>
            @endcan
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{ $chambre->id }}">Arrangement</button>

            <?php
            $arr = \App\Models\Arrangement::where('room_id', $chambre->id)->first();

            ?>

            <div class="modal" id="myModal{{ $chambre->id }}">
              <div class="modal-dialog">
                <div class="modal-content" style="background-color: white;">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Arrangement </h4>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <form method="POST" action="{{route('arrangement.store',$chambre->id)}}">
                      @csrf
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Prix demi pension </label>
                            <input type="integer" class="form-control" name="prix_dp{{ $chambre->id }}" value="{{isset($arr->prix_dp)?$arr->prix_dp:''}}" style=" background-color: white;color:black;">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Prix longement simple </label>
                            <input type="integer" class="form-control" name="prix_log_simple{{ $chambre->id }}" style="background-color: white; color:black;" value="{{isset($arr->prix_log_simple)?$arr->prix_log_simple:''}}">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Prix longement petit déjeuner </label>
                            <input type="integer" class="form-control" name="prix_log_pet_dej{{ $chambre->id }}" style="background-color: white; color:black;" value="{{isset($arr->prix_log_pet_dej)?$arr->prix_log_pet_dej:''}}">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Prix All inclusive </label>
                          <input type="integer" class="form-control" name="prix_all_inclus{{ $chambre->id }}" style="background-color: white;color:black;" value="{{isset($arr->prix_all_inclus)?$arr->prix_all_inclus:''}}">
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Prix All inclusive Soft Drink </label>
                          <input type="integer" class="form-control" name="prix_all_soft_drink{{ $chambre->id }}" style="background-color: white;color:black;" value="{{isset($arr->prix_all_soft_drink)?$arr->prix_all_soft_drink:''}}">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Prix Pension complete </label>
                          <input type="integer" class="form-control" name="prix_pension_comp{{ $chambre->id }}" style="background-color: white; color:black;" value="{{isset($arr->prix_pension_comp)?$arr->prix_pension_comp:''}}">
                        </div>
                      </div>




                  </div>

                  <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" data-bs-dismiss="modal" value="Enregistrer" onsubmit="return confirmSubmit()" />

                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                  </div>


                  </form>
                </div>

              </div>
            </div>
    </div>
    </td>


    </td>
    </tr>
    <!-- Modal -->
    {{ csrf_field() }}
    <div class="modal fade" id="ModelDelete{{$chambre->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">supprimer chambre</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">êtes-vous sûr de vouloir supprimer cet enregistrement <b>{{$chambre->id}}</b>?</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Annuler') }}</button>
            <a href="{{ route('chambre.destory',$chambre->id) }}" class="btn btn-primary">{{__('supprime') }}</a>
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