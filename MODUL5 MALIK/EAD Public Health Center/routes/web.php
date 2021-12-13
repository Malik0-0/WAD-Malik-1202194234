    <?php

    use Illuminate\Support\Facades\Route;

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
        return view('home');
    });

    Route::resource('vaccine',Controller_Vaccine::class);
    Route::get('/patient/daftar/', 'Controller_Patient@daftar');
    Route::get('/patient/create/{id}/', 'Controller_Patient@create');
    Route::resource('patient', 'Controller_Patient', ['except' => ['create']]);
