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
                   
                    <div class="pull-left" >
                <h2 style="color:black;">Liste des circuit</h2>
            </div>
        <div class="row">
            <div class="col-lg-12 margin-tb">
               
                 <div class="pull-right"  style="float:right; margin-bottom:2%;">
                 @can('circuit-create')
                     <a class="btn btn-success" href="{{ route('circuit.create') }}" style="background-color: #00d25b;">Ajouter un nouveau circuit</a>
                @endcan
                    </div>
            </div>
        </div>    
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>           
        @endif       
                  
                     <table  id="zero_config"
                      class="table table-striped table-bordered">
             <tr>
                    <th>#</th>
                    <th>image</th>
                    <th>titre</th>
                    <th>description</th>
                    <th>programme</th>
                    <th>Ville  de départ</th>
                    <th>Ville d'arrivé</th>
                    <th>Nombre de personnes</th>
                    <th>Prix</th>
                    <th>Logement</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th width="280px">Actions</th>
             </tr>
                        @foreach($circuit as $circuit)
            <tr>
                                        <td>{{ ++$i }}</td>
                                        <td><img src="{{asset('circuit')}}/{{$circuit->image}}" style="width:110px; height:100px;" alt="Image"></td>
                                         
                                        <td>{{ $circuit->titre }}</td>
                                        <td>{{ Str::limit($circuit->description,'8','...')}}</td>
                                        <td>{{ Str::limit($circuit->programme,'8','...') }}</td>
                                        <td>{{ $circuit->ville_depart }}</td>
                                        <td>{{ $circuit->ville_arrive }}</td>
                                        <td>{{ $circuit->nb_personne }}</td>
                                        <td>{{ $circuit->prix }}</td>
                                        <td>{{Str::limit($circuit->logement,'8','...')}}</td>
                                        <td>{{ $circuit->date_debut }}</td>
                                        <td>{{ $circuit->date_fin }}</td>
                                        <td>                    
                                           
                                              @can('circuit-list')
                                                <a class="btn btn-info" style="background-color:#8f5fe8;" href="{{ route('circuit.show',$circuit->id) }}"><i class="mdi mdi-eye" ></i></a>
                                                @endcan
                                                @can('circuit-edit')
                                                <a class="btn btn-primary" style="background-color: #26a1eb;" href="{{ route('circuit.edit',[$circuit->id]) }}"><i class="mdi mdi-pencil-box-outline" ></i></a>
                                                @endcan
                                                @csrf
                                               
                                                @can('circuit-delete')
                                                <button  class="btn btn-danger"  style="background-color:#fc424a;"data-toggle="modal" data-target="#ModelDelete{{$circuit->id}}"><i class="mdi mdi-delete" ></i></button>
                                                @endcan
                                              
                                        </td>
            </tr>
            <!-- Modal -->
{{ csrf_field() }}
<div class="modal fade" id="ModelDelete{{$circuit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">supprimer circuit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">êtes-vous sûr de vouloir supprimer cet enregistrement <b>{{$circuit->id}}</b>?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Annuler') }}</button>
        <a href="{{ route('circuit.destory',$circuit->id) }}" class="btn btn-primary">{{__('supprime') }}</a>
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