<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/default','App\Http\Controllers\SiteController@index')->name('site.default');
Route::get('/contact', 'App\Http\Controllers\SiteController@contact')->name('site.contact');
Route::get('/about', 'App\Http\Controllers\SiteController@about')->name('site.about');
Route::get('/login', 'App\Http\Controllers\SiteController@login')->name('site.login');

// rotas agrupadas pelo método group para o prefixo app
Route::prefix('/app')->group(function () {
    Route::get('/customers', 'App\Http\Controllers\AppController@customers')->name('app.customers');
    Route::get('/providers', 'App\Http\Controllers\AppController@providers')->name('app.providers');
    Route::get('/products', 'App\Http\Controllers\AppController@products')->name('app.products');
});

// rota com parametros utilizando função callback
Route::get('/contact_par/{name}/{category}/{assunt}/{message}', function (string $name, string $category, string $subject, string $message) {
    echo "Rota com parametros: $name - $category - $subject - $message";
});

// o caracter ? no parametro indica que é opcional
Route::get('/contact_par_opt/{name}/{category}/{assunt}/{message?}', function (string $name, string $category, string $subject, string $message = 'menssagem não informada') {
    echo "Rota com parametros: $name - $category - $subject - $message";
});

// expressões regulares para tratar parametros nas rotas
Route::get('/contact_exp/{name}/{category_id}', function (string $name, string $category_id) {
    echo "Rota com parametros: $name - $category_id";
})->where('category_id', '[0-9]+')->where('name', '[A-Za-z]+');

// testando encaminhamento de parametros para controlador
Route::get('/test/{p1}/{p2}', 'App\Http\Controllers\TestController@test')->name('site.test');

// rota de contingência
Route::fallback(function () {
    echo 'A rota não existe - <a href="' . route('site.default') . '"Página Principal</a>';
});



