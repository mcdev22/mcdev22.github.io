<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CaissierController;

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

Route::prefix('admin')->group(function(){
 Route::get('/',[AdminController::class, 'index'])->name('admin.login');
 Route::get('/login/profil',[AdminController::class, 'store'])->name('admin.check');
 Route::get('/logout',[AdminController::class, 'destroy'])->name('admin.logout')->middleware('admin');
 Route::get('/dashboard',App\Http\Livewire\admin\DashboardComponent::class)->name('admin.dash')->middleware('admin');

/************ Category Product *******************/
 Route::get('/category',App\Http\Livewire\admin\CategoryComponent::class)->name('admin.category')->middleware('admin');
 Route::get('/addcategory',App\Http\Livewire\admin\AddcategoryComponent::class)->name('admin.addcategory')->middleware('admin');


 /************ Category Supplement *******************/
 Route::get('/catextra',App\Http\Livewire\admin\CategorySupplementComponent::class)->name('admin.catextra')->middleware('admin');
 Route::get('/addcatextra',App\Http\Livewire\admin\AddCategoryExtraComponent::class)->name('admin.addcatextra')->middleware('admin');
 

 /************Product******** *************/
 Route::get('/product',App\Http\Livewire\admin\ProductsComponent::class)->name('admin.product')->middleware('admin');
 Route::get('/addproduct',App\Http\Livewire\admin\AddproductComponent::class)->name('admin.addproduct')->middleware('admin');
 //Route::get('/editproduct{product_id}',App\Http\Livewire\admin\EditproductComponent::class)->name('admin.editproduct')->middleware('admin');


 /************Extra******** *************/
 Route::get('/extra',App\Http\Livewire\admin\ExtrasComponent::class)->name('admin.extra')->middleware('admin');
 Route::get('/addextra',App\Http\Livewire\admin\AddExtrasComponent::class)->name('admin.addextra')->middleware('admin');


/**************Supplier*********************/
Route::get('/addsupplier',App\Http\Livewire\admin\AddsupplierComponent::class)->name('admin.addsupplier')->middleware('admin');


/**************Caissier*********************/
Route::get('/caissier',App\Http\Livewire\admin\CaissierComponent::class)->name('admin.caissier')->middleware('admin');
Route::get('/addcaissier',App\Http\Livewire\admin\AddcaissierComponent::class)->name('admin.addcaissier')->middleware('admin');
Route::get('/editcaissier/{user_id}',App\Http\Livewire\admin\EditcaissierComponent::class)->name('admin.editcaissier')->middleware('admin');
Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

/**************Factures*********************/
Route::get('/addfacture',App\Http\Livewire\admin\AddfactureComponent::class)->name('admin.addfacture')->middleware('admin');
Route::get('/facture',App\Http\Livewire\admin\FactureComponent::class)->name('admin.facture')->middleware('admin');

/**************Stock*********************/
Route::get('/powergrid',App\Http\Livewire\admin\StockComponent::class)->name('admin.stock')->middleware('admin');
// Route::view('/powergrid', 'powergrid-demo');

});

Route::middleware(['auth'])->group(function(){
    Route::get('/user/product',App\Http\Livewire\user\ProductComponent::class)->name('user.product');
    Route::get('/product-cat/{category_slug}',App\Http\Livewire\user\CategoryComponent::class)->name('category.product');
    Route::get('/extra_cat/{catg_slug}',App\Http\Livewire\user\SupplcategoryComponent::class)->name('extra.product');
    Route::get('/cart',App\Http\Livewire\user\CartComponent::class)->name('cart');
    Route::post('user/chifre',[CaissierController::class, 'store_chiffre'])->name('user.chiffre');

});
require __DIR__.'/auth.php';


