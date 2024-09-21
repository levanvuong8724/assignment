<?php


use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
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
// Đăng nhập
Route::get('login',[AuthenticationController::class,'login'])->name('login');
Route::post('post-login',[AuthenticationController::class,'postLogin'])->name('postLogin');
// Đăng xuất
Route::get('logout',[AuthenticationController::class,'logout'])->name('logout');
// Đăng ký
Route::get('dangky',[AuthenticationController::class,'dangky'])->name('dangky');

Route::post('postDangky',[AuthenticationController::class,'postDangky'])->name('postDangky');






// CRUD Admin
// Admin products routes
Route::middleware('checkAdmin')->prefix('admin')->group(function () {

       Route::prefix('products')->group(function () {
        // Listing products
        Route::get('/', [ProductController::class, 'index'])->name('admin.products.list_product');

        // Add product
        Route::get('/add', [ProductController::class, 'add'])->name('admin.products.add_product');
        Route::post('/addpost', [ProductController::class, 'addpost'])->name('admin.products.addpost');

        // Delete product
        Route::delete('/{id}', [ProductController::class, 'delete'])->name('admin.products.delete');

        // Product detail
        Route::get('/detail_product/{id}', [ProductController::class, 'detailProduct'])->name('admin.products.detail');

        // Edit product
        Route::get('/edit_product/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
        Route::put('/update/{id}', [ProductController::class, 'editPacth'])->name('admin.products.editPut');
    });
});

// User

 Route::get('user',[DashboardController::class,'index'])->name('dashboard.list_user');
 Route::get('user/add', [DashboardController::class, 'add'])->name('dashboard.add_user');
 Route::post('user/addpost', [DashboardController::class, 'addpost'])->name('dashboard.addpost');
 Route::get('edit/{id}', [DashboardController::class, 'edit'])->name('dashboard.edit_user');
 Route::post('edit/update/{id}', [DashboardController::class, 'editPost'])->name('dashboard.editpost');
 Route::delete('user/{id}', [DashboardController::class, 'delete'])->name('dashboard.delete');


// Category
   Route::get('category',[CategoryController::class,'index'])->name('category.list_category');
   Route::get('category/add', [CategoryController::class, 'add'])->name('category.add_category');
   Route::post('category/addpost', [CategoryController::class, 'addpost'])->name('category.addpost');
   Route::delete('/{id}', [CategoryController::class, 'delete'])->name('category.delete');
   Route::get('/edit_category/{id}', [CategoryController::class, 'edit'])->name('category_edit');
   Route::put('/update_category/{id}', [CategoryController::class, 'editPut'])->name('category.editPut');


   // Người dùng

   Route::get('trangchu',[UserController::class,'home'])->name('user.products.list_products');
//    Route::get('index', [UserController::class, 'index'])->name('index');
   Route::get('search',[UserController::class, 'search'])->name('search');
