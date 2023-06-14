@extends('Frontend.master')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card" style="background-color:#fff; border:none; overflow-x: auto;">
    <div class="card-body">

      <div class="pull-left">
        <h2 style="color:black;">Liste des arrangements</h2>
      </div>
      <div class="row">
        <div class="col-lg-12 margin-tb">

          <div class="pull-right" style="float:right; margin-bottom:2%;">
            @can('arrangement-create')
            <a class="btn btn-success" href="{{ route('arrangement.create') }}" style="background-color: #00d25b;">Ajouter un nouveau arrangement</a>
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
          <th>Nom</th>
          <th>Prix</th>
          <th width="280px">Actions</th>
        </tr>
        @foreach($arrangement as $arrangement)
        <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $arrangement->nom }}</td>
          <td>{{ $arrangement->prix}}</td>
          <td>

            @can('arrangement-list')
            <a class="btn btn-info" href="{{ route('arrangement.show',$arrangement->id) }}"><i class="mdi mdi-eye"></i></a>
            @endcan
            @can('arrangement-edit')
            <a class="btn btn-primary" href="{{ route('arrangement.edit',[$arrangement->id]) }}"><i class="mdi mdi-pencil-box-outline"></i></a>
            @endcan
            @csrf

            @can('arrangement-delete')
            <button class="btn btn-danger" data-toggle="modal" data-target="#ModelDelete{{$arrangement->id}}"><i class="mdi mdi-delete"></i></button>
            @endcan



          </td>
        </tr>
        <!-- Modal -->
        {{ csrf_field() }}
        <div class="modal fade" id="ModelDelete{{$arrangement->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">supprimer arrangement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">êtes-vous sûr de vouloir supprimer cet enregistrement <b>{{$arrangement->id}}</b>?</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Annuler') }}</button>
                <a href="{{ route('arrangement.destory',$arrangement->id) }}" class="btn btn-primary">{{__('supprime') }}</a>
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