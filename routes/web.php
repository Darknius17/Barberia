<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ReservaController;
use Illuminate\Database\Eloquent\Model;


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
    return view('principal.index');
});

Route::get('/header', function () {
    return view('general.header');
});

Route::get('/footer', function () {
    return view('general.footer');
});

Route::get('/index', function () {
    return view('principal.index');
});
Route::get('/admin', function () {
    return view('admin.indexAdmin');
});


    Route::get('/horas', function () {
        return view('agenda.gestionHoras');

    })->middleware('admin','auth');



Route::get('/prueba1', function () {
    return view('tienda.editar');
});


 Route::get('/carrito', function () {
   return view('tienda.carrito');
});

 Route::get('/contacto', function () {
      return view('principal.contacto');
 });

 Route::get('/salon', function () {
    return view('principal.salon');
});

Route::get('/servicios', function () {
    return view('servicio.index');
});
Route::get('/aprende', function () {
   return view('principal.aprende');
});

Route::get('/reserva', function () {
    return view('principal.reserva');
 });

 Route::get('/reserva/calendario', function () {
    return view('agenda.cliente');
 });


Auth::routes();

Route::get('/holas/{id}',[ ReservaController::class, 'index' ])->name('agenda.mostrar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Productos
Route::prefix('productos')->group(function(){
Route::get('/',[ ProductosController::class, 'index' ])->name('tienda.productos');
Route::get('/crear',[ ProductosController::class, 'create' ])->name('tienda.crear');
Route::post('/crear',[ ProductosController::class, 'store' ])->name('tienda.store');
Route::get('/{id}',[ ProductosController::class, 'show' ])->name('tienda.show');
Route::get('/editar/{id}',[ ProductosController::class, 'edit' ])->name('tienda.editar');
Route::put('/{productos}',[ ProductosController::class, 'update' ])->name('tienda.actualizar');
Route::delete('/{productos}',[ ProductosController::class, 'destroy' ])->name('tienda.eliminar');

Route::get('/descripcion/{productos}',[ ProductosController::class, 'show' ])->name('tienda.show');

});

Route::get('/tienda',[ TiendaController::class, 'index' ])->name('tienda.index');

//Agenda
Route::prefix('agenda')->group(function(){

    Route::get('/',[ AgendaController::class, 'index' ])->name('agenda.index');
    Route::get('/crear',[ AgendaController::class, 'create' ])->name('agenda.crear');
    Route::post('/crear',[ AgendaController::class, 'store' ])->name('agenda.store');
    Route::get('/editar/{id}',[ AgendaController::class, 'edit' ])->name('agenda.editar');
    Route::put('/editar/{agenda}',[ AgendaController::class, 'update' ])->name('agenda.actualizar');
    Route::delete('/editar/{agenda}',[ AgendaController::class, 'destroy' ])->name('agenda.eliminar');


    Route::get('/reserva/show',[ AgendaController::class, 'show' ])->name('agenda.show');

/*
    Route::post('/reserva/crear',[ AgendaController::class, 'store1' ])->name('agenda.reservacrear');

    Route::post('/reserva/editar/{id}',[ AgendaController::class, 'edit1' ])->name('agenda.editar1');
    Route::post('/reserva/borrar/{id}',[ AgendaController::class, 'destroy1' ])->name('agenda.borrar1');
    Route::post('/reserva/actualizar/{agenda}',[ AgendaController::class, 'update1' ])->name('agenda.actualizar1');
*/

});


//Servicio
Route::prefix('servicio')->group(function(){

    Route::get('/',[ ServiciosController::class, 'index' ])->name('servicio.index');
    Route::get('/crear',[ ServiciosController::class, 'create' ])->name('servicio.crear');
    Route::post('/crear',[ ServiciosController::class, 'store' ])->name('servicio.store');
    Route::get('/editar/{id}',[ ServiciosController::class, 'edit' ])->name('servicio.editar');
    Route::put('/editar/{servicios}',[ ServiciosController::class, 'update' ])->name('servicio.actualizar');
    Route::delete('/editar/{servicios}',[ ServiciosController::class, 'destroy' ])->name('servicio.eliminar');



});

Route::prefix('reserva')->group(function(){

    Route::get('/',[ ReservaController::class, 'index' ])->name('reserva.index');
    Route::get('/crear',[ ReservaController::class, 'create' ])->name('reserva.crear');
    Route::post('/crear',[ ReservaController::class, 'store' ])->name('reserva.store');
    Route::get('/editar/{id}',[ ReservaController::class, 'edit' ])->name('reserva.editar');
    Route::put('/editar/{reserva}',[ ReservaController::class, 'update' ])->name('reserva.actualizar');
    Route::delete('/editar/{reserva}',[ ReservaController::class, 'destroy' ])->name('reserva.eliminar');

    Route::get('/editar1/{id}',[ AgendaController::class, 'editr' ])->name('agendar.editar');
    Route::put('/editar1/{agenda}',[ AgendaController::class, 'updater' ])->name('agendar.actualizar');

    Route::delete('/editar1/{agenda}',[ AgendaController::class, 'destroyr' ])->name('agendar.eliminar');


    Route::get('/reserva',[ AgendaController::class, 'mostrar' ])->name('agenda.cliente');

});

Route::prefix('gestion')->group(function(){

    Route::get('/',[ EventoController::class, 'index' ])->name('users.index');
    Route::get('/crear',[ EventoController::class, 'create' ])->name('users.crear');
    Route::post('/crear',[ EventoController::class, 'store' ])->name('users.store');
    Route::get('/editar/{id}',[ EventoController::class, 'edit' ])->name('users.editar');
    Route::put('/editar/{user}',[ EventoController::class, 'update' ])->name('users.actualizar');
    Route::delete('/editar/{user}',[ EventoController::class, 'destroy' ])->name('users.eliminar');



});

 //Route::prefix('mrchavez')->group(function(){

   // Route::get('/',[PrincipalController::class, 'index' ])->name('principal.index');
    //Route::get('/aprende',[PrincipalController::class, 'aprende' ])->name('principal.aprende');
    //Route::get('/contacto',[PrincipalController::class, 'contacto' ])->name('principal.contacto');
    //Route::get('/salon',[PrincipalController::class, 'salon' ])->name('principal.salon');







//});


//Route::get('/agenda',[ AgendaController::class, 'index' ])->name('agenda.index');




// Route::resource('/productos', ProductoController::class);
// Route::get('productos', function(){
//     return view('tienda.productos');

// });

// Route::get('/tienda', [ProductoController::class, 'index'])->name('tienda') ;


// Route::controller(ProductoController::class)->group(function(){

//     Route::get('/tienda','index');


// });


Auth::routes();


