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
                <h2 style="color:black;">Liste de voyage Omra</h2>
            </div>
        <div class="row">
            <div class="col-lg-12 margin-tb">
               
                 <div class="pull-right"  style="float:right; margin-bottom:2%;">
                 @can('omra-create')
                     <a class="btn btn-success" href="{{ route('omra.create') }}" style="background-color: #00d25b;">Ajouter un nouveau voyage Omra</a>
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
                    <th>date_depart</th>
                    <th>date_arrive</th>
                    <th>prix</th>
                    <th>promo</th>
                    <th>Début promo</th>
                    <th>Fin promo</th>
                    <th width="280px">Actions</th>
             </tr>
                        @foreach($omra as $omra)
            <tr>
                                        <td>{{ ++$i }}</td>
                                        <td><img src="{{asset('omra')}}/{{$omra->image}}" style="width:110px; height:100px;" alt="Image"></td>
                                         
                                        
                                        <td>{{ $omra->titre}}</td>
                                        <td>{{Str::limit($omra->description ,'8','...' )}}</td>
                                        <td>{{ $omra->date_depart }}</td>
                                        <td>{{ $omra->date_arrive }}</td>
                                        <td>{{ $omra->prix }}</td>
                                        <td>{{ $omra->promo }}</td>
                                        <td>{{ $omra->date_deb }}</td>
                                        <td>{{ $omra->date_fin }}</td>
                                        <td>                    
                                       
                                              @can('omra-list')
                                                <a class="btn btn-info" style="background-color:#8f5fe8;" href="{{ route('omra.show',$omra->id) }}"><i class="mdi mdi-eye" ></i></a>
                                                @endcan
                                                @can('omra-edit')
                                                <a class="btn btn-primary" style="background-color: #26a1eb;" href="{{ route('omra.edit',[$omra->id]) }}"><i class="mdi mdi-pencil-box-outline" ></i></a>
                                                @endcan
                                                @csrf
                                               
                                                @can('omra-delete')
                                                <button  class="btn btn-danger"style="background-color:#fc424a;" data-toggle="modal" data-target="#ModelDelete{{$omra->id}}"><i class="mdi mdi-delete" ></i></button>
                                                @endcan
                                           
                                        </td>
            </tr>
         <!-- Modal -->
{{ csrf_field() }}
<div class="modal fade" id="ModelDelete{{$omra->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">supprimer Omra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">êtes-vous sûr de vouloir supprimer cet enregistrement <b>{{$omra->id}}</b>?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Annuler') }}</button>
        <a href="{{ route('omra.destory',$omra->id) }}" class="btn btn-primary">{{__('supprime') }}</a>
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