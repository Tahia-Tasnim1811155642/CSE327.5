<?php
use App\Http\livewire\HomeComponent;
use App\Http\livewire\ShopComponent;
use App\Http\livewire\CartComponent;
use App\Http\livewire\CheckoutComponent;
use App\Http\livewire\SearchComponent;
use App\Http\livewire\User\UserDashboardComponent;
use App\Http\livewire\Admin\AdminDashboardComponent;
use App\Http\livewire\Admin\AdminProductComponent;
use App\Http\livewire\DetailsComponent;
use App\Http\livewire\CategoryComponent;
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



Route::get('/shop', ShopComponent::class);
Route::get('/checkout', CheckoutComponent::class);
Route::get('/search', SearchComponent::class)->name('product.search');
Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');
