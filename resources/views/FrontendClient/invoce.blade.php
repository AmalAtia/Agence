<!DOCTYPE html>
<html lang="en">
<?php $page = 'master.interface' ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Agence de voyage </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/all.min.css')}}" />

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <!-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> -->
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />

    <script>
        window.print();
    </script>

</head>

<body>
    <div class="container-scroller" style="margin: 4%;">
        <div class="row">
            <div class="col-md-6">
                <center> <img src="http://127.0.0.1:8000/assets/images/kayan.png" alt="logo" style="padding: 15px;width: 19%;"></center>
            </div>
            <div class="col-md-6" style="font-size:5rem">

                <center>Invoice</center>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <center>
                    <span style="font-weight: bold;"> Nom et prénom : <span style="font-weight: 400;">{{$user->name}}</span> </span><br>
                    <span style="font-weight: bold;"> addresse :<span style="font-weight: 400;">{{$user->adresse}}</span></span><br>
                    <span style="font-weight: bold;"> numéro :<span style="font-weight: 400;">{{$user->num_tel}}</span></span><br>

                    <span style="font-weight: bold;"> Date départ :<span style="font-weight: 400;">{{date('d/m/Y',strtotime($reservation->depart))}}</span></span><br>
                    <span style="font-weight: bold;"> Date d'arrivé : <span style="font-weight: 400;">{{date('d/m/Y',strtotime($reservation->arrive))}}</span></span><br>
                </center>
            </div>
            <div class="col-md-6" style="">
                <center>
                    <div>

                        <span style="font-weight: bold;"> Code : <span style="font-weight: 500;">{{$reservation->code_reservation}}</span></span><br>
                        <div style="padding: 2%;"></div>
                        <span style="font-weight: bold;"> Hôtel : <span style="font-weight: 400;">{{$hotel->name}}</span></span><br>
                        <span style="font-weight: bold;"> addresse : <span style="font-weight: 400;">{{$hotel->adresse}}</span></span><br>

                    </div>
                </center>
            </div>
        </div>
        <div>
            <table class="table" style="margin-top: 3%;">
                <thead >
                    <tr style="background:#1e91a5 ; ">
                        <th>Chambre</th>
                        <th>Quantité</th>
                        <th>Occupation</th>
                        <th>Arrangement</th>
                        <th>Prix</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(json_decode($reservation->rooms) as $room)
                    <tr>
                        <td>
                            {{$room->name}}
                        </td>
                        <td>
                            {{$room->nbrCh}}
                        </td>
                        <td>
                            {{$room->nbA}} Adults {{$room->nbE}} Enfants
                        </td>
                        <td>
                            {{$room->arrangement}}
                        </td>
                        <td>
                            {{$room->prix}} DT
                        </td>
                    </tr>
                    @php
                    $prixT= $room->prixT;
                    @endphp
                    @endforeach
                </tbody>
            </table>
            <div style="background:#1e91a5 ;width: 15%;padding: 1%;    float: right; color:white">
             <center> Prix Total  {{$prixT}} DT</center>
            </div>

        </div>
    </div>
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->

    <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.cookie.js" type="text/javascript')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('asset/js/all.min.js')}}"></script>
    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("am");
        var btns = header.getElementsByClassName("am");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
</body>

</html>