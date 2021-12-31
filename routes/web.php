<?php
use App\Http\livewire\HomeComponent;
use App\Http\livewire\ShopComponent;
use App\Http\livewire\CartComponent;
use App\Http\livewire\User\UserDashboardComponent;
use App\Http\livewire\Admin\AdminDashboardComponent;
use App\Http\livewire\Admin\AdminProductComponent;
use App\Http\livewire\DetailsComponent;


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

Route::get('/', HomeComponent::class);
Route::get('/shop', ShopComponent::class);
Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/admin/product', AdminProductComponent::class)->name('admin.products');



Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

