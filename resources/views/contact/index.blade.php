@extends('Frontend.master')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card" style="background-color:#fff; border:none; overflow-x: auto;">
    <div class="card-body">

      <div class="pull-left">
        <h2 style="color:black;">Liste des Contacts</h2>
      </div>

      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
      <br><br>
      <table id="zero_config" class="table table-striped table-bordered">
        <tr>
          <th>#</th>
          <th>Nom</th>
          <th>Email</th>
          <th>Objet</th>
          <th>Commentaires</th>
          <th width="280px">Actions</th>
        </tr>
        @foreach($contacts as $contact)
        <tr>
          <td>{{ $contact->id }}</td>
          <td>{{ $contact->nom }}</td>
          <td>{{ $contact->email }}</td>
          <td>{{ $contact->subject }}</td>
          <td>{{ $contact->commentaire }}</td>
          <td>

            <a class="btn btn-info" href="{{ route('contact.show',$contact->id) }}"><i class="mdi mdi-eye"></i></a>
            @csrf

            <button class="btn btn-danger" data-toggle="modal" data-target="#ModelDelete{{$contact->id}}"><i class="mdi mdi-delete"></i></button>
          </td>
        </tr>
        <!-- Modal -->
        {{ csrf_field() }}
        <div class="modal fade" id="ModelDelete{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">supprimer Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">êtes-vous sûr de vouloir supprimer cet enregistrement <b>{{$contact->nom}}</b>?</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Annuler') }}</button>
                <a href="{{ route('contact.destory',$contact->id) }}" class="btn btn-primary">{{__('supprime') }}</a>
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