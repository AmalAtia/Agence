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
                <div class="card" style="background-color:#fff; border:none;overflow-x: auto;">
                  <div class="card-body">
                   
                    <div class="pull-left" >
                <h2 style="color:black;">Liste de nouveau Voyages </h2>
            </div>
        <div class="row">
            <div class="col-lg-12 margin-tb">
               
                 <div class="pull-right"  style="float:right; margin-bottom:2%;">
                 @can('voyage-create')
                     <a class="btn btn-success" href="{{ route('voyage.create') }}" style="background-color: #00d25b;">Ajouter un nouveau voyage</a>
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
                    <th>destination</th>
                    <th>pays</th>
                    <th>thems</th>
                    <th>prix</th>
                    <th>date_debut</th>
                    <th>date_fin</th>
                    <th width="280px">Actions</th>
             </tr>
                        @foreach($voyage as $voyage)
            <tr>
                                        <td>{{ ++$i }}</td>
                                        <td><img src="{{asset('voyage')}}/{{$voyage->image}}" style="width:110px; height:100px;" alt="Image"></td>
                                         
                                        <td>{{ $voyage->titre }}</td>
                                        <td>{{Str::limit($voyage->destination,'8','...')}}</td>
                                        <td>{{ $voyage->pays }}</td>
                                        <td>{{ $voyage->thems }}</td>
                                        <td>{{ $voyage->prix }}</td>
                                        <td>{{ $voyage->date_debut }}</td>
                                        <td>{{ $voyage->date_fin }}</td>
                                        <td>                    
                                          
                                            @can('voyage-list')
                                                <a class="btn btn-info" style="background-color:#8f5fe8;" href="{{ route('voyage.show',$voyage->id) }}"><i class="mdi mdi-eye" ></i></a>
                                                @endcan
                                                @can('voyage-edit')
                                                
                                              <a class="btn btn-primary" style="background-color: #26a1eb;" href="{{ route('voyage.edit',[$voyage->id]) }}"><i class="mdi mdi-pencil-box-outline" ></i></a>
                                              @endcan
                                              @csrf
                                            
                                                @can('voyage-delete')
                                                <button  class="btn btn-danger" style="background-color:#fc424a;" data-toggle="modal" data-target="#ModelDelete{{$voyage->id}}"><i class="mdi mdi-delete" ></i></button>
                                                @endcan
                                              
                                        </td>
            </tr>
             <!-- Modal -->
{{ csrf_field() }}
<div class="modal fade" id="ModelDelete{{$voyage->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">supprimer voyage</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">êtes-vous sûr de vouloir supprimer cet enregistrement <b>{{$voyage->id}}</b>?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Annuler') }}</button>
        <a href="{{ route('voyage.destory',$voyage->id) }}" class="btn btn-primary">{{__('supprime') }}</a>
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