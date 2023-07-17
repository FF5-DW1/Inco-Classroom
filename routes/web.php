<?php

use App\Http\Controllers\TestDatabaseController; //testing connection with to database
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompetenciaController; 

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

Route::get('/test-connection', [TestDatabaseController::class, 'testConnection']); //testing connection with to database

// Ruta de inicio

Route::get('/', function () {
    return view('landing');
});

//guest view 

Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('landing');
    });
});

// Ruta de inicio después del login
Route::get('/home', [LoginController::class, 'home'])->name('home');

// Rutas de autenticación
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// // Ruta de registro
// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Nosotros
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

// FAQ
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Página del curso
Route::get('/cursos', function () {
    return view('courses');
})->name('cursos');

//Actions with competencias
Route::get('/home/create', [CompetenciaController::class, 'create'])->name('home.create');
Route::post('/home', [CompetenciaController::class, 'store']);
Route::get('/home/{id}/edit', [CompetenciaController::class, 'edit'])->name('home.edit');
Route::post('/home/{id}', [CompetenciaController::class, 'update']);

//Actions with courses
Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::post('/cursos', [CursoController::class, 'store']);
Route::get('/cursos/{id}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
Route::post('/cursos/{id}', [CursoController::class, 'update']);

// Contenido del curso
Route::get('/cursos/{id}', function () {
    return view('course');
})->name('modulos');

// Recursos para estudiar
// Route::get('/curso/recursos', function () {
//     return view('recursos');
// })->name('recursos');


// Ruta de verificación de correo electrónico
Route::get('/email/verify', [AuthController::class, 'showVerificationNotice'])
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verify'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/resend', [AuthController::class, 'resendVerification'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.resend');


