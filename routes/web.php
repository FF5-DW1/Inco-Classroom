<?php

use App\Http\Controllers\TestDatabaseController; //testing connection with to database
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompetenciaController; 
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuloController;

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
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas de autenticación
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Nosotros
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

// FAQ
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Página del curso
// Route::get('/cursos', function () {
//     return view('courses');
// })->name('cursos');

// Página recursos
Route::get('/recursos', function () {
    return view('recursos');
})->name('recursos');

// Admin panel
// Route::get('/admin-panel', function () {
//     return view('admin-panel');
// })->name('admin-panel');
Route::get('/admin-panel', function () { 
    return view('admin-panel');
})->middleware('auth', 'role:superadmin')->name('admin-panel');

// Vista de usuarios
Route::get('/admin-panel/users', function () {
    return view('admin-users');
})->name('admin-users');

// Vista de competencias
Route::get('/admin-panel/competencies', function () {
    return view('admin-competencies');
})->name('admin-competencies');

// Vista de cursos
Route::get('/admin-panel/courses', function () {
    return view('admin-courses');
})->name('admin-courses');

// Nueva competencia
Route::get('/admin/nueva-competencia', function () {
    return view('nueva-competencia');
})->name('nueva-competencia');

// Nuevo curso
Route::get('/admin/nuevo-curso', function () {
    return view('nuevo-curso');
})->name('nuevo-curso');

//Actions with competencias
//create
Route::get('/home/create', [CompetenciaController::class, 'create'])->name('home.create');
Route::post('/home', [CompetenciaController::class, 'store']);
//edit
Route::get('/home/{id}/edit', [CompetenciaController::class, 'edit'])->name('home.edit');
Route::put('/home/{id}', [CompetenciaController::class, 'update']);
//delete 
Route::delete('/home/{id}', [CompetenciaController::class, 'destroy']);
//show
// Route::get('/home/{id}', [CompetenciaController::class, 'show'])->name('competencia.show');
Route::get('{slug}', [CompetenciaController::class, 'show'])->name('competencia.show');

//Actions with courses
// create
Route::get('/cursos/create', [CursoController::class, 'create'])->name('curso.create');
Route::post('/cursos', [CursoController::class, 'store']);
//edit
Route::get('/cursos/{id}/edit', [CursoController::class, 'edit'])->name('curso.edit');
Route::put('/cursos/{id}', [CursoController::class, 'update'])->name('curso.update');
//delete 
Route::delete('/cursos/{id}', [CursoController::class, 'destroy'])->name('curso.destroy');
//show modules of the curso
Route::get('/cursos/{slug}', [CursoController::class, 'show'])->name('curso.show');

//Actions with modulos
// create
Route::get('/modulos/create', [ModuloController::class, 'create'])->name('modulo.create');
Route::post('/modulos', [ModuloController::class, 'store']);
//edit
Route::get('/modulos/{id}/edit', [ModuloController::class, 'edit'])->name('modulo.edit');
Route::put('/modulos/{slug}', [ModuloController::class, 'update'])->name('modulo.update');;
//delete 
Route::delete('/modulos/{id}', [ModuloController::class, 'destroy'])->name('modulo.destroy');

// Contenido del curso
// Route::get('/cursos/{id}', function () { 
//     return view('course');
// })->name('modulos');


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


