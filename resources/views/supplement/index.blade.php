@extends('Frontend.master')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card" style="background-color:#fff; border:none; overflow-x: auto;">
    <div class="card-body">

      <div class="pull-left">
        <h2 style="color:black;">Liste des supplements </h2>
      </div>
      <div class="row">
        <div class="col-lg-12 margin-tb">

          <div class="pull-right" style="float:right; margin-bottom:2%;">
            @can('supplement-create')
            <a class="btn btn-success" href="{{ route('supplement.create') }}" style="background-color: #00d25b;">Ajouter un nouveau supplement</a>
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
          <th>Icon</th>
          <th width="280px">Actions</th>
        </tr>
        @foreach($supplement as $supplement)
        <tr>supplement
          <td>{{ ++$i }}</td>
          <td>{{ $supplement->nom }}</td>
          <td> <i class="{{ $supplement->icon}}"></i> </td>
          <td>

            @can('supplement-list')
            <a class="btn btn-info" href="{{ route('supplement.show',$supplement->id) }}"><i class="mdi mdi-eye"></i></a>
            @endcan
            @can('supplement-edit')
            <a class="btn btn-primary" href="{{ route('supplement.edit',[$supplement->id]) }}"><i class="mdi mdi-pencil-box-outline"></i></a>
            @endcan
            @csrf

            @can('supplement-delete')
            <button class="btn btn-danger" data-toggle="modal" data-target="#ModelDelete{{$supplement->id}}"><i class="mdi mdi-delete"></i></button>
            @endcan



          </td>
        </tr>
        <!-- Modal -->
        {{ csrf_field() }}
        <div class="modal fade" id="ModelDelete{{$supplement->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">supprimer supplement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">êtes-vous sûr de vouloir supprimer cet enregistrement <b>{{$supplement->id}}</b>?</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Annuler') }}</button>
                <a href="{{ route('supplement.destory',$supplement->id) }}" class="btn btn-primary">{{__('supprime') }}</a>
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