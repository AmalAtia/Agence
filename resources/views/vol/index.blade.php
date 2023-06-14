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
                <h2 style="color:black;">Liste des Vols</h2>
            </div>
        <div class="row">
            <div class="col-lg-12 margin-tb">
               
                 <div class="pull-right"  style="float:right; margin-bottom:2%;">
                 @can('vol-create')
                     <a class="btn btn-success" href="{{ route('vol.create') }}" style="background-color: #00d25b;">Ajouter un nouveau vol</a>
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
                    <th>Numéro de Vol</th>
                    <th>Type de vol</th>
                    <th>nb_billet</th>
                    <th>date_aller</th>
                    <th>date_retour</th>
                    <th>nb_personne</th>
                    <th>ville_depart</th>
                    <th>ville_arrive</th>
                    <th>prix</th>
                    <th width="280px">Actions</th>
             </tr>
                        @foreach($vol as $vol)
            <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                         
                                        <td>{{ $vol->num }}</td>
                                        <td>{{ $vol->type_vol}}</td>
                                        <td>{{ $vol->nb_billet }}</td>
                                        <td>{{ $vol->date_aller }}</td>
                                        <td>{{ $vol->date_retour }}</td>
                                        <td>{{ $vol->nb_personne }}</td>
                                        <td>{{ $vol->ville_depart }}</td>
                                        <td>{{ $vol->ville_arrive }}</td>
                                        <td>{{ $vol->prix }}</td>
                                        <td>                    
                                            @can('vol-list')
                                                <a class="btn btn-info" style="background-color:#8f5fe8;" href="{{ route('vol.show',$vol->id) }}"><i class="mdi mdi-eye" ></i></a>
                                                @endcan
                                                @can('vol-edit')
                                                <a class="btn btn-primary" style="background-color: #26a1eb;"href="{{ route('vol.edit',[$vol->id]) }}"><i class="mdi mdi-pencil-box-outline" ></i></a>
                                                @endcan
                                                @csrf
                                             
                                                @can('vol-delete')
                                                <button  class="btn btn-danger" style="background-color:#fc424a;" data-toggle="modal" data-target="#ModelDelete{{$vol->id}}"><i class="mdi mdi-delete" ></i></button>
                                                @endcan
                                        </td>
            </tr>
             <!-- Modal -->
{{ csrf_field() }}
<div class="modal fade" id="ModelDelete{{$vol->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">supprimer vol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">êtes-vous sûr de vouloir supprimer cet enregistrement <b>{{$vol->id}}</b>?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Annuler') }}</button>
        <a href="{{ route('vol.destory',$vol->id) }}" class="btn btn-primary">{{__('supprime') }}</a>
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