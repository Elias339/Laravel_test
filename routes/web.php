<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/dashboard', function () {
    return view('admin.home');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::post('/add-company',[Homecontroller::class,'AddCompany'])->name('add_company');
Route::get('/company-list',[HomeController::class,'CompanyList'])->name('company_list');
Route::get('/edit-company/{id}',[Homecontroller::class,'EditCompany'])->name('editcompany');
Route::post('/update-company',[Homecontroller::class,'UpdateCompany'])->name('updatecompany');
Route::get('/delete-company/{id}',[Homecontroller::class,'DeleteCompany'])->name('deletecompany');


Route::post('/add-employee',[Homecontroller::class,'AddEmployee'])->name('add_employee');
Route::get('/employee-list',[HomeController::class,'EmployeeList'])->name('employee_list');

Route::get('/edit-employee/{id}',[Homecontroller::class,'EditEmployee'])->name('editemployee');
Route::post('/update-employee',[Homecontroller::class,'UpdateEmployee'])->name('updateemployee');

Route::get('/delete-employee/{id}',[Homecontroller::class,'DeleteEmployee'])->name('deleteemployee');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
