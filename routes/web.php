<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

// Route::get('/', [PagesController::class, 'index']);
Route::get('/', [PagesController::class, 'home']);
Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about',function (){
    return view('about');
} );
Route::get('/servicios',function (){
    return view('servicios');
} );
Route::get('/contactanos',function (){
    return view('contacto');
} );
Route::get('/productos',function (){
    return view('productos');
} );
Route::get('/syslab',function (){
    return view('syslab.index');
} );

Route::post('/mensaje', [App\Http\Controllers\PagesController::class, 'enviomail'])->name('mensaje');
// Route::post('mensaje',function(){
//     //correo
//     $data= request()->all();
//     Mail::send ('emails.mensaje',$data,function($message) use ($data){
//         $message->from($data['email'],$data['name'])
//             ->to('info@gmiti.com', 'Info')
//             ->subject($data['name']);
//     });


//     return back()->with('flash','Tu mensaje ha sido recibido !');
// })->name('mensaje');


Route::post('/blog/favorite/{slug}/{user_id}', [App\Http\Controllers\PostsController::class, 'favorite']);

Route::post('/favorite/{slug}/{user_id}', [App\Http\Controllers\PostsController::class, 'unfavorite']);

Route::get('/favorites', [App\Http\Controllers\PostsController::class, 'favorites']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
