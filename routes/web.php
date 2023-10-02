<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Admins;
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



Route::get('/admin', function () {
    return view('admin.auth.signin');
});

// admins routes
Route::get('/admin/admins',[Admins::class,'index']);
Route::get('/admin/admins/add', [Admins::class,'create']);
Route::get('/admin/admins/edit/{id}', [Admins::class,'edit']);
Route::delete('/admin/admins', [Admins::class,'destroy']);


Route::group(['middleware'=>[]],function(){
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/dashboard', function () {
        return view('admin.index');
    });
});
