<?php

use App\Http\Controllers\BudgetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InvestmentsController;


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
    return view('welcome');
});

Auth::routes();

//Investments Routes

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/investments', [InvestmentsController::class, 'index'])->name('investments.index');

Route::get('/investments/create', [InvestmentsController::class, "create"])->name("investments.create");

Route::get('/investments/{investment}', [InvestmentsController::class, "show"])->name("investments.show");

Route::post('/investments', [InvestmentsController::class, "store"])->name("investments.store");

Route::get('/investments/{investment}/edit', [InvestmentsController::class, "edit"])->name("investments.edit");

Route::put('/investments/{investment}', [InvestmentsController::class, "update"])->name("investments.update");

Route::delete('/investments/{investment}', [InvestmentsController::class, "destroy"])->name("investments.destroy");

//Budget Routes

Route::get('/budget/create', [BudgetController::class,'create'])->name('budget.create');
Route::post('/budget', [BudgetController::class, 'store'])->name('budget.store');
Route::get('/budget/{budgetid}', [BudgetController::class, 'show'])->name('budget.show');
Route::get('/budget/{budgetid}/edit', [BudgetController::class, 'edit'])->name('budget.edit');
Route::post('/budget/{budgetid}', [BudgetController::class, 'update'])->name('budget.update');

// Admin Routes

Route::middleware(['auth', 'isAdmin'])->group( function() {
    Route::get('/dashboard', function () {
        return view('admin.index');
    });
});
