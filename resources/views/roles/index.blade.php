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
                <h2 style="color:black;">Gestion des rôles</h2>
            </div>
        <div class="row">
            <div class="col-lg-12 margin-tb">
               
                 <div class="pull-right"  style="float:right; margin-bottom:2%;">
                @can('role-create')
                
                     <a class="btn btn-success" href="{{ route('roles.create') }}" style="background-color: #00d25b;">Ajouter un nouveau rôle</a>
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
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
    @can('role-list')
            <a class="btn btn-info" style="background-color:#8f5fe8;" href="{{ route('roles.show',$role->id) }}"><i class="mdi mdi-eye" ></i></a>
           @endcan
           @can('role-edit')
                <a class="btn btn-primary"  style="background-color: #26a1eb;" href="{{ route('roles.edit',$role->id) }}"><i class="mdi mdi-pencil-box-outline" ></i></a>
                @endcan   
            @can('role-delete')
            <button  class="btn btn-danger" style="background-color:#fc424a;" data-toggle="modal" data-target="#ModelDelete{{$role->id}}"><i class="mdi mdi-delete" ></i></button>

            @endcan
        </td>
    </tr>
                 <!-- Modal -->
{{ csrf_field() }}
<div class="modal fade" id="ModelDelete{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">supprimer role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">êtes-vous sûr de vouloir supprimer cet enregistrement <b>{{$role->id}}</b>?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Annuler') }}</button>
        <a href="{{ route('roles.destory',$role->id) }}" class="btn btn-primary">{{__('supprime') }}</a>
      </div>
    </div>
  </div>
</div>
    @endforeach
</table>


{!! $roles->render() !!}



@endsection