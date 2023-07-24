<?php

use App\Http\Controllers\TestDatabaseController; //testing connection with to database
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompetenciaController; 
use App\Http\Controllers\CourseController; 

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

// Página recursos
Route::get('/recursos', function () {
    return view('recursos');
})->name('recursos');

// Admin panel
Route::get('/admin-panel', function () {
    return view('admin-panel');
})->name('admin-panel');

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

//Actions with competencias
//create
Route::get('/home/create', [CompetenciaController::class, 'create'])->name('home.create');
Route::post('/home', [CompetenciaController::class, 'store']);
//edit
Route::get('/home/{id}/edit', [CompetenciaController::class, 'edit'])->name('home.edit');
Route::put('/home/{id}', [CompetenciaController::class, 'update']);
//delete 
Route::delete('/home/{id}', [CompetenciaController::class, 'destroy']);

//Actions with courses
//show
Route::get('/home/{id}', [CourseController::class, 'courses'])->name('courses.show');
//create
Route::get('/cursos/create', [CourseController::class, 'create'])->name('cursos.create');
Route::post('/cursos', [CourseController::class, 'store']);
//edit
Route::get('/cursos/{id}/edit', [CourseController::class, 'edit'])->name('cursos.edit');
Route::put('/cursos/{id}', [CourseController::class, 'update']);

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


