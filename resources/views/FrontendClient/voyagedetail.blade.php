@extends('FrontendClient.master')
@section('styles')


<style>
    * {
        box-sizing: border-box;
    }

    /* Create two equal columns that floats next to each other */
    .column {
        float: left;
        width: 50%;
        padding: 10px;
        height: 400px;
        /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .show {

        background-color: #00000030;
        display: block !important;
    }
</style>
@endsection


@section('content')
<div class="header-left" style="
   margin-left: 0px;
    margin-top: 30px;
    background-color: #f4f7f9;">
    <h1 style="margin-left: 131px;">{{ $voyage->titre }}</h1>



    <div class="row" style=" float: none; padding: 29px;margin-right: 70px; margin-bottom:20px; margin-left:8%;">
        <div class="column" style="background-color:white;box-shadow: 2px 2px 13px rgba(0, 0, 0, 0.1);">

            <img src="{{asset('voyage')}}/{{$voyage->image}}" alt="Image" style="width: 100%;height: 100%;">

            <!-- <p>Some text..</p> -->
        </div>
        <div class="column" style="background-color:white;box-shadow: 2px 2px 13px rgba(0, 0, 0, 0.1);">
            <h2>Thems</h2></br>
            <p style=" text-align: justify;text-justify: inter-word;">{{ $voyage->thems }}</p>

            <div class="reservation" style="margin-left: 457px;margin-top: 256px;">
                <ul>
                    <li class="span1_of_3">
                        <div class="date_btn">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Réserver</button>
                            <input type="hidden" value="{{$voyage->id}}" name="id_res">
                        </div>
                    </li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            @if($voyage->nb_disponible == 0)

            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Réserver {{$voyage->titre}}</h4>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="col-8 text-center" style=" margin-top: 80px;"><img src="{{asset('asset/images/emotion.png')}}"></div>
                            <div>
                                <h4 class="title-head text-center" style="margin-bottom: 0px; color: rgb(173, 173, 168);">Désolé nous n'avons trouvé
                                    aucun résultat</h4>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
            @else

            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Réserver {{$voyage->titre}}</h4>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="POST" action="{{route('reserve-voyage.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nom <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="nom" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Prénom<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="prenom" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email<span style="color:red;">*</span></label>
                                            <input type="email" class="form-control" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Numéro de téléphone<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="num_tel" required>
                                        </div>
                                    </div>

                                    <input type="hidden" value="{{$voyage->id}}" name="voyage_id">
                                    <input type="hidden" value="{{ $voyage->nb_personne }}" name="voyage_nb">


                                    <?php
                                    $count = App\Models\ResevationVoyage::where('voyage_id', $voyage->id)->count();

                                    $nb_disponible = $voyage->nb_personne - $count;

                                    ?>

                                    <input type="hidden" value="{{$nb_disponible}}" name="nb_disponible" />

                                </div>
                                <!-- <button class="btn bg-primary">Send Message</button> -->
                                <!-- Modal footer -->
                                <div class="modal-footer">

                                    <input type="submit" class="btn btn-primary" data-bs-dismiss="modal" value="Réservez" onsubmit="return confirmSubmit()" />
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>


</div>





@endsection