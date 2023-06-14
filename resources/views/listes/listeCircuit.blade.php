@extends('Frontend.masterclient')
@section('content')

{{-- count reservation circuit si vide n'est pas circuit --}}

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card" style="background-color:#fff; border:none;overflow-x: auto;">
        <div class="card-body">

            <div class="pull-left">
                <h2 style="color:black;">Liste du Cicruit "{{Auth::user()->email}}"</h2>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <table id="zero_config" class="table table-striped table-bordered">
                <tr>
                    <th>#</th>
                    <th>titre</th>
                    <th>Nom</th>
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
                        <a class="btn btn-info" href="{{ route('omra.show',$omra->id) }}"><i class="mdi mdi-eye"></i></a>
                        @endcan
                        @can('omra-edit')
                        <a class="btn btn-primary" href="{{ route('omra.edit',[$omra->id]) }}"><i class="mdi mdi-pencil-box-outline"></i></a>
                        @endcan
                        @csrf

                        @can('omra-delete')
                        <button class="btn btn-danger" data-toggle="modal" data-target="#ModelDelete{{$omra->id}}"><i class="mdi mdi-delete"></i></button>
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