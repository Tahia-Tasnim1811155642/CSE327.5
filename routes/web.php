<?php
use App\Http\livewire\HomeComponent;
use App\Http\livewire\User\UserDashboardComponent;
use App\Http\livewire\Admin\AdminDashboardComponent;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', HomeComponent::class);

//Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){              
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

// For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});


