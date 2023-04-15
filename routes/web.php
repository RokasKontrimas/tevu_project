<?php



use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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
    $data = Product::all();

    return view('welcome', compact('data'));
});
Route::redirect('/home','/products');
Route::redirect('/register','/');

Route::resource('products', ProductController::class)->except(['edit','show','update'])->middleware('auth');
