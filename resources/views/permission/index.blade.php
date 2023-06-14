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
                <div class="card" style="background-color:#fff; border:none;">
                  <div class="card-body">
                   
                    <div class="pull-left" >
                <h2 style="color:black;">Gestion des permissions</h2>
            </div>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                
            <div class="pull-right"  style="float:right; margin-bottom:2%;">
            @can('permission-create')
     
            <a class="btn btn-success" href="{{ route('permission.create') }}" style="background-color: #00d25b;"> Créer une nouvelle permission</a>
            @endcan
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table class="table table-bordered">
  <tr>
     <th>Id</th>
     <th>Nom</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($permissions as $key => $permission)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $permission->name }}</td>
        <td>
        @can('permission-list')
            <a class="btn btn-info"  style="background-color:#8f5fe8;"href="{{ route('permission.show',$permission->id) }}"><i class="mdi mdi-eye" ></i></a>
            @endcan
            @can('permission-edit')
                <a class="btn btn-primary"  style="background-color: #26a1eb;" href="{{ route('permission.edit',$permission->id) }}"><i class="mdi mdi-pencil-box-outline" ></i></a>
                @endcan
            @can('permission-delete')
            <button  class="btn btn-danger" style="background-color:#fc424a;" data-toggle="modal" data-target="#ModelDelete{{$permission->id}}"><i class="mdi mdi-delete" ></i></button>

            @endcan
        </td>
    </tr>
                     <!-- Modal -->
{{ csrf_field() }}
<div class="modal fade" id="ModelDelete{{$permission->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">supprimer permission</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">êtes-vous sûr de vouloir supprimer cet enregistrement <b>{{$permission->id}}</b>?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Annuler') }}</button>
        <a href="{{ route('permission.destory',$permission->id) }}" class="btn btn-primary">{{__('supprime') }}</a>
      </div>
    </div>
  </div>
</div>
    @endforeach
</table>
<ul class="pagination">
  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item active"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>

</div>
</div>



@endsection