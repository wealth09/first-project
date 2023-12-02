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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*firstproject.com == /
firstproject.com/users == /users


//Route to users
Route::get('/users', function() {
    return 'Welcome to the user page';
});

//Route to users - Array
Route::get('/users', function() {
    return ['HTML', 'PHP', 'LARAVEL', 'CSS'];
});

//Route to users- JSON object
Route::get('/users', function () {
    return response()->json([
        'name' => 'Dary',
        'course' => 'Laravel Begginers To Advanced'
    ]);
});

//Route to users- function: this will redirect the user back to the laravel home page.
Route::get('/users', function () {
    return redirect('/');
});

*/

//Controller that send back a view.

//Route::get('/products', [ProductsController::class, 'index']);
//Route::get('/products/about', [ProductsController::class, 'about']);

//route parameter
//Route::get('/products/{name}', [ProductsController::class, 'show']);

//pattern integer
//Route::get('/products/{id}',
//[ProductsController::class, 'show'])->where('id', '[0-9]+');

//pattern string
//Route::get('/products/{name}',
//[ProductsController::class, 'show'])->where('name', '[a-zA-Z]+');

//pattern is string and integer
/*Route::get('/products/{name}/{id}',
[ProductsController::class, 'show'])->where([
    'name' => '[a-z]+',
    'id' => '[0-9]+'
]);*/

//NAMEED ROUTE
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/structure', [PagesController::class, 'structure']);
Route::get('/loop', [PagesController::class, 'loop']);

//posts endpoint

Route::get('/posts', [PostsController::class, 'index']);

Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');



