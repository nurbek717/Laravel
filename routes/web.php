<?php
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Company;
use App\Models\Laptop;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::view('/', 'home');

//Route::get('/mail' , function (){
//
//    return'Done';
//});

Route::get('/text', function () {
    $job = Student::find(12);
  \App\Jobs\ShowingJob::dispatch($job);
    return "hello world";
});


// Student Routes
//Route::resource('students', StudentController::class)->middleware('auth');

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create'])->middleware('auth');
Route::post('/students', [StudentController::class, 'store'])->middleware('auth');
Route::get('/students/{student}', [StudentController::class, 'show']);
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->middleware('auth');
Route::patch('/students/{student}', [StudentController::class, 'update'])->middleware('auth');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->middleware('auth');



// Authentication Routes
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);

// Services Route
Route::get('/services', function () {
    $services = Company::all();
    return view('services', ['services' => $services]);
});

// Service Detail Route
Route::get('/service/{id}', function ($id) {
    $service = Company::find($id);
    return view('service', ['service' => $service]);
});

// Portfolio Route
Route::get('/portfolio', function () {
    $laptops = Laptop::with('company')->get();
    return view('portfolio', ['laptops' => $laptops]);
});

// Laptop Detail Route
Route::get('/laptop/{id}', function ($id) {
    $laptop = Laptop::find($id);
    return view('laptop', ['laptop' => $laptop]);
});
