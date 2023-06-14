<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\OmraController;
use App\Http\Controllers\VoyageOrganise;
use App\Http\Controllers\VolController;
use App\Http\Controllers\CircuitController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\FavorisController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\TemplateClient;
use App\Http\Controllers\HotelClient;
use App\Http\Controllers\VolClient;
use App\Http\Controllers\CircuitClient;
use App\Http\Controllers\VoyageClientEt;
use App\Http\Controllers\FavorisClient;
use App\Http\Controllers\LivreDor;
use App\Http\Controllers\ResevationCircuitController;
use App\Http\Controllers\ArrangementController;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\ContactClient;
use App\Http\Controllers\OmraClient;
use App\Http\Controllers\SupplementController;
use App\Http\Controllers\ProfileAdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AvisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes([
    'verify' => true
]);

Route::get('/home', [TemplateController::class, 'index'])->name('master.interface');;

Route::get('/homecontact', [TemplateController::class, 'index1'])->name('client.dashborad');

Route::get('/interface', [TemplateClient::class, 'index'])->name('client.interface');
Route::get('/interface', [TemplateClient::class, 'index1'])->name('client.interface');


Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
Route::get('/favoris', [FavorisController::class, 'index'])->name('favoris.index');

Route::post('/getRooms', [HotelClient::class, 'reservation_hotels'])->name('get.rooms');


Route::get('/amal', [HotelClient::class, 'index'])->name('client.amal');
Route::get('/reservation/hotel', [HotelClient::class, 'index1'])->name('reservation.hotel');
Route::get('showClientHotel/{id}', [HotelClient::class, 'show'])->name('hotel.clishow');
Route::get('showClientOmra/{id}', [OmraClient::class, 'show'])->name('omra.clishow');
Route::get('showClientVoyage/{id}', [VoyageClientEt::class, 'show'])->name('voyage.clishow');
Route::get('/search-omra', [OmraClient::class, 'search_omra'])->name('search.omra.price');
Route::get('showOmra/{id}', [OmraClient::class, 'show'])->name('omra.client.show');
Route::get('showVoyage/{id}', [VoyageClientEt::class, 'show'])->name('voyage.client.show');

Route::get('showCircuit/{id}', [CircuitClient::class, 'show'])->name('circuit.client.show');
Route::get('/search-circuit', [CircuitClient::class, 'search_circuit'])->name('search.circuit.price');
Route::get('/filtreLocal', [CircuitClient::class, 'filtreLocal'])->name('filtre.by.local');
Route::get('/filtreAdresse', [CircuitClient::class, 'filtreAdresse'])->name('filtre.by.adresse');

Route::post('/reserver-circuit', [CircuitClient::class, 'store'])->name('reserve-circuit.store');
Route::post('/reserver-voyage', [VoyageClientEt::class, 'store'])->name('reserve-voyage.store');

Route::get('/filtreByStars', [HotelClient::class, 'filtreByStars'])->name('filtre.by.stars');
Route::get('/filtreLocalisation', [HotelClient::class, 'filtreLocalisation'])->name('filtre.by.localisation');
Route::get('/filtreArrangement', [HotelClient::class, 'filtreArrangement'])->name('filtre.by.arrangement');
Route::get('/search-hotel', [HotelClient::class, 'search_hotels'])->name('search.hotel.price');

Route::post('/sendReservation/{param?}', [HotelClient::class, 'reservation'])->name('send.reservation');

Route::get('/client', [VolClient::class, 'index'])->name('vol.client');
Route::get('/vol', [VolClient::class, 'search'])->name('vol.search');

Route::get('/circuit-client', [CircuitClient::class, 'index'])->name('cir.client');
Route::get('/voyage-étranger', [VoyageClientEt::class, 'index'])->name('voyage.client');
Route::get('/filtreAdresseVoyage', [VoyageClientEt::class, 'filtreLocalisation'])->name('voyage.by.localisation');
Route::get('/voyage-price', [VoyageClientEt::class, 'search_voyage'])->name('search.voyage.price');


Route::get('/omra-client', [OmraClient::class, 'index'])->name('omra.client');
Route::post('/reserver-omra', [OmraClient::class, 'store'])->name('reserve-omra.store');
Route::get('/contacte', [ContactClient::class, 'index'])->name('contact.client');
Route::get('/livredor', [LivreDor::class, 'index'])->name('livre.client');


Route::post('/contacts', [ContactClient::class, 'store'])->name('contact.store');
Route::group(['prefix' => 'arrangement'], function () {
    Route::get('/', [ArrangementController::class, 'index'])->name('arrangement.index');
    Route::get('create', [ArrangementController::class, 'create'])->name('arrangement.create');
    Route::post('store/{id}', [ArrangementController::class, 'store'])->name('arrangement.store');
    Route::get('destory/{id}', [ArrangementController::class, 'destroy'])->name('arrangement.destory');
    Route::get('edit/{id}', [ArrangementController::class, 'edit'])->name('arrangement.edit');
    Route::get('show/{id}', [ArrangementController::class, 'show'])->name('arrangement.show');

    Route::post('update/{id}', [ArrangementController::class, 'update'])->name('arrangement.update');
});


Route::group(['prefix' => 'supplement'], function () {
    Route::get('/', [SupplementController::class, 'index'])->name('supplement.index');
    Route::get('create', [SupplementController::class, 'create'])->name('supplement.create');
    Route::post('store', [SupplementController::class, 'store'])->name('supplement.store');
    Route::get('destory/{id}', [SupplementController::class, 'destroy'])->name('supplement.destory');
    Route::get('edit/{id}', [SupplementController::class, 'edit'])->name('supplement.edit');
    Route::get('show/{id}', [SupplementController::class, 'show'])->name('supplement.show');

    Route::post('update/{id}', [SupplementController::class, 'update'])->name('supplement.update');
});





Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [ContactClient::class, 'liste'])->name('contact.index');
    Route::get('destory/{id}', [ContactClient::class, 'destroy'])->name('contact.destory');
    Route::get('show/{id}', [ContactClient::class, 'show'])->name('contact.show');
});
Route::group(['prefix' => 'hotel'], function () {
    Route::get('/', [HotelController::class, 'index'])->name('hotels.index');
    Route::get('create', [HotelController::class, 'create'])->name('hotels.create');
    Route::post('store', [HotelController::class, 'store'])->name('hotels.store');
    Route::get('destory/{id}', [HotelController::class, 'destroy'])->name('hotels.destory');
    Route::get('edit/{id}', [HotelController::class, 'edit'])->name('hotels.edit');
    Route::get('show/{id}', [HotelController::class, 'show'])->name('hotels.show');

    Route::post('update/{id}', [HotelController::class, 'update'])->name('hotels.update');
});

Route::group(['prefix' => 'chambre'], function () {
    Route::get('/', [ChambreController::class, 'index'])->name('chambre.index');
    Route::get('create', [ChambreController::class, 'create'])->name('chambre.create');
    Route::post('store', [ChambreController::class, 'store'])->name('chambre.store');
    Route::get('destory/{id}', [ChambreController::class, 'destroy'])->name('chambre.destory');
    Route::get('edit/{id}', [ChambreController::class, 'edit'])->name('chambre.edit');
    Route::get('show/{id}', [ChambreController::class, 'show'])->name('chambre.show');

    Route::post('update/{id}', [ChambreController::class, 'update'])->name('chambre.update');
});



Route::group(['prefix' => 'omra'], function () {
    Route::get('index', [OmraController::class, 'index'])->name('omra.index');
    Route::get('create', [OmraController::class, 'create'])->name('omra.create');
    Route::post('store', [OmraController::class, 'store'])->name('omra.store');
    Route::get('destory/{id}', [OmraController::class, 'destroy'])->name('omra.destory');
    Route::get('edit/{id}', [OmraController::class, 'edit'])->name('omra.edit');
    Route::get('show/{id}', [OmraController::class, 'show'])->name('omra.show');

    Route::post('update/{id}', [OmraController::class, 'update'])->name('omra.update');
});
Route::group(['prefix' => 'voyage'], function () {
    Route::get('index', [VoyageOrganise::class, 'index'])->name('voyage.index');
    Route::get('create', [VoyageOrganise::class, 'create'])->name('voyage.create');
    Route::post('store', [VoyageOrganise::class, 'store'])->name('voyage.store');
    Route::get('destory/{id}', [VoyageOrganise::class, 'destroy'])->name('voyage.destory');
    Route::get('edit/{id}', [VoyageOrganise::class, 'edit'])->name('voyage.edit');
    Route::get('show/{id}', [VoyageOrganise::class, 'show'])->name('voyage.show');

    Route::post('update/{id}', [VoyageOrganise::class, 'update'])->name('voyage.update');
});
Route::group(['prefix' => 'vol'], function () {
    Route::get('index', [VolController::class, 'index'])->name('vol.index');
    Route::get('create', [VolController::class, 'create'])->name('vol.create');
    Route::post('store', [VolController::class, 'store'])->name('vol.store');
    Route::get('destory/{id}', [VolController::class, 'destroy'])->name('vol.destory');
    Route::get('edit/{id}', [VolController::class, 'edit'])->name('vol.edit');
    Route::get('show/{id}', [VolController::class, 'show'])->name('vol.show');

    Route::post('update/{id}', [VolController::class, 'update'])->name('vol.update');
});
Route::group(['prefix' => 'circuit'], function () {
    Route::get('index', [CircuitController::class, 'index'])->name('circuit.index');
    Route::get('create', [CircuitController::class, 'create'])->name('circuit.create');
    Route::post('store', [CircuitController::class, 'store'])->name('circuit.store');
    Route::get('destory/{id}', [CircuitController::class, 'destroy'])->name('circuit.destory');
    Route::get('edit/{id}', [CircuitController::class, 'edit'])->name('circuit.edit');
    Route::get('show/{id}', [CircuitController::class, 'show'])->name('circuit.show');

    Route::post('update/{id}', [CircuitController::class, 'update'])->name('circuit.update');
});
// Route::group(['prefix'=>'suggestion'],function(){
//     Route::get('index',[ReservationController::class, 'index'])->name('reservation.index');
//     Route::get('create',[ReservationController::class, 'create'])->name('reservation.create');
//     Route::post('store',[ReservationController::class, 'store'])->name('reservation.store');
//     Route::get('destory/{id}',[ReservationController::class, 'destroy'])->name('reservation.destory');
//     Route::get('edit/{id}',[ReservationController::class, 'edit'])->name('reservation.edit');
//     Route::get('show/{id}',[ReservationController::class, 'show'])->name('reservation.show');

//     Route::post('update/{id}',[ReservationController::class, 'update'])->name('reservation.update');


// });


Route::group(['prefix' => 'Acceuil'], function () {
    Route::get('index', [AcceuilController::class, 'index'])->name('acceuil.index');
});
// Route::group(['prefix'=>'favoris'],function(){
//     Route::get('index',[FavorisController::class, 'index'])->name('favoris.index');
//     Route::get('create',[FavorisController::class, 'create'])->name('favoris.create');
//     Route::post('store',[FavorisController::class, 'store'])->name('favoris.store');
//     Route::get('destory/{id}',[FavorisController::class, 'destroy'])->name('favoris.destory');
//     Route::get('edit/{id}',[FavorisController::class, 'edit'])->name('favoris.edit');
//     Route::get('show/{id}',[FavorisController::class, 'show'])->name('favoris.show');

//     Route::post('update/{id}',[FavorisController::class, 'update'])->name('favoris.update');


// });
Route::group(['middleware' => 'auth', 'prefix' => 'users'], function () {
    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    Route::get('index', [UserController::class, 'index'])->name('users.index');
    Route::get('create', [UserController::class, 'create'])->name('users.create');
    Route::post('store', [UserController::class, 'store'])->name('users.store');
    Route::get('destory/{id}', [UserController::class, 'destroy'])->name('users.destory');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::get('show/{id}', [UserController::class, 'show'])->name('users.show');

    Route::post('update/{id}', [UserController::class, 'update'])->name('users.update');
});
Route::group(['middleware' => 'auth', 'prefix' => 'roles'], function () {
    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    Route::get('index', [RoleController::class, 'index'])->name('roles.index');
    Route::get('create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('store', [RoleController::class, 'store'])->name('roles.store');
    Route::get('destory/{id}', [RoleController::class, 'destroy'])->name('roles.destory');
    Route::get('edit/{id}', [RoleController::class, 'edit'])->name('roles.edit');
    Route::get('show/{id}', [RoleController::class, 'show'])->name('roles.show');

    Route::post('update/{id}', [RoleController::class, 'update'])->name('roles.update');
});
Route::group(['middleware' => 'auth', 'prefix' => 'permission'], function () {

    Route::get('index', [PermissionController::class, 'index'])->name('permission.index');
    Route::get('create', [PermissionController::class, 'create'])->name('permission.create');
    Route::post('store', [PermissionController::class, 'store'])->name('permission.store');
    Route::get('destory/{id}', [PermissionController::class, 'destroy'])->name('permission.destory');
    Route::get('edit/{id}', [PermissionController::class, 'edit'])->name('permission.edit');
    Route::get('show/{id}', [PermissionController::class, 'show'])->name('permission.show');

    Route::post('update/{id}', [PermissionController::class, 'update'])->name('permission.update');
});

Route::get('/test-contact', function () {
    return new App\Mail\Contact([
        'nom' => 'Durand',
        'email' => 'durand@chezlui.com',
        'message' => 'Je voulais vous dire que votre site est magnifique !'
    ]);
});
Route::get('/test-contact', function () {
    return new App\Mail\Contact([
        'nom' => 'Durand',
        'email' => 'durand@chezlui.com',
        'message' => 'Je voulais vous dire que votre site est magnifique !'
    ]);
});


Route::group(['prefix' => 'favoris'], function () {


    Route::get('/favorisList/{id}', [App\Http\Controllers\FavorisClient::class, 'index'])->name('favorisListShow.index');
    Route::get('/favorisCircuit/{id}', [App\Http\Controllers\FavorisClient::class, 'index1'])->name('favorisCircuit.index');
    Route::get('/favorisOmra/{id}', [App\Http\Controllers\FavorisClient::class, 'index2'])->name('favorisOmra.index');
    Route::get('/favorisVoyage/{id}', [App\Http\Controllers\FavorisClient::class, 'index3'])->name('favorisVoyage.index');

    Route::get('/favorisListShowCount/{id}', [App\Http\Controllers\FavorisClient::class, 'ShowCount'])->name('favorisListShowCount.ShowCount');
    Route::post('/unfavorite/{hotel}', [App\Http\Controllers\FavorisClient::class, 'destroy'])->name('hotels.unfavorite');
    Route::post('/unfavorite/{circuit}', [App\Http\Controllers\FavorisClient::class, 'destroy'])->name('circuits.unfavorite');
    Route::post('/unfavorite/{omra}', [App\Http\Controllers\FavorisClient::class, 'destroy'])->name('omra.unfavorite');
    Route::post('/unfavorite/{voyage}', [App\Http\Controllers\FavorisClient::class, 'destroy'])->name('voyage.unfavorite');

});

Route::get('posts', 'HomeController@posts')->name('posts');

Route::post('posts', 'HomeController@postPost')->name('posts.post');

Route::get('posts/{id}', 'HomeController@show')->name('posts.show');

Route::get('getsomme', 'App\Http\Controllers\HomeController@getsomme')->name('getsomme');

/**profil**/
Route::get('profileAdmin', [ProfileAdminController::class, 'index'])->name('profileAdmin.index');
Route::get('profileAdmin/edit/{id}', [ProfileAdminController::class, 'edit'])->name('profileAdmin.edit');
Route::post('profileAdmin/update/{id}', [ProfileAdminController::class, 'update'])->name('profileAdmin.update');
/****/
/**profile client**/
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
/**Prodile client**/

Route::post('/avis',[AvisController::class,'reviewstore'])->name('reviewstore');






//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
