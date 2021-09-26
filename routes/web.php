<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactFormController;
use App\Http\Middleware\AdminLogin;
use App\Http\Controllers\BannersController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::match(array('GET','POST'),'/','App\Http\Controllers\UsersController@index');
Route::get('/categories/{category_id}',[UsersController::class,'categories']);
Route::get('/category/{category_id}',[UsersController::class,'category']);
Route::get('/search',[UsersController::class,'search']);
Route::get('/products/{id}',[ProductsController::class,'products']);

Route::match(array('GET','POST'),'/contact_us',[ContactFormController::class,'contact_us']);

Route::match(array('GET','POST'),'/register_page','App\Http\Controllers\UsersController@register');
Route::match(array('GET','POST'),'/login_page','App\Http\Controllers\UsersController@login');

Route::get('/confirm/{code}',[UsersController::class, 'confirmAccount']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user-logout', [UsersController::class, 'logout']);

//Product Review
Route::post('/review',[ProductsController::class, 'review']);

Route::get('/quick_view/{id}',[ProductsController::class, 'quick_view_products']);
Route::match(array('GET','POST'),'/admin','App\Http\Controllers\AdminController@login');

//Admin Logout
Route::get('/logout',[AdminController::class, 'logout']);


Route::group(['middleware'=>['frontlogin']],function() {

//Route for users account
Route::match(array('GET','POST'),'/account',[UsersController::class,'account']);
Route::get('/orders',[ProductsController::class,'userOrders']);
Route::get('/orders/{id}',[ProductsController::class,'userOrderDetails']);
    
Route::match(array('GET','POST'),'/checkout',[ProductsController::class,'checkout']);
Route::match(array('GET','POST'),'/order-review',[ProductsController::class,'orderReview']);
Route::match(array('GET','POST'),'/place-order',[ProductsController::class,'placeOrder']);
Route::get('/thanks',[ProductsController::class,'thanks']);
Route::match(array('GET','POST'),'/stripe',[ProductsController::class,'stripe']); 

//Route For Delete Wishlist Product
Route::get('/wishlist/delete-product/{id}',[ProductsController::class,'deleteWishlistProduct']);

//Route For Delete Comapre Product
Route::get('/compare/delete-product/{id}',[ProductsController::class,'deleteCompareProduct']);

//Route For Delete Cart Product
Route::get('/cart/delete-product/{id}',[ProductsController::class,'deleteCartProduct']);
//Apply Coupon Code
Route::post('/cart/apply-coupon',[ProductsController::class,'applyCoupon']);
// Route for add to cart
Route::match(array('GET','POST'),'add-cart','App\Http\Controllers\ProductsController@addtoCart');
// Route for add to cart
Route::match(array('GET','POST'),'add-wishlist','App\Http\Controllers\ProductsController@addtoWishlist');


// Route for add to cart
Route::match(array('GET','POST'),'add-compare','App\Http\Controllers\ProductsController@addtoCompare');


// Route for cart
Route::match(array('GET','POST'),'/cart','App\Http\Controllers\ProductsController@cart');
//Route For update Quantity
Route::get('/cart/update-quantity/{id}/{quantity}',[ProductsController::class,'updateCartQuantity']);

// Route for Wishlist
Route::match(array('GET','POST'),'/wishlist','App\Http\Controllers\ProductsController@wishlist');

// Route for Compare Products
Route::match(array('GET','POST'),'/compare','App\Http\Controllers\ProductsController@compare');

});





Route::group(['middleware'=>['AdminLogin']],function() {

Route::get('/admin/dashboard',[AdminController::class, 'dashboard']);

//Banners Route
Route::match(array('GET','POST'),'/admin/banners','App\Http\Controllers\BannersController@banners');
Route::match(array('GET','POST'),'/admin/add-banner','App\Http\Controllers\BannersController@addBanner');
Route::match(array('GET','POST'),'/admin/edit-banner/{id}','App\Http\Controllers\BannersController@editBanner');
Route::match(array('GET','POST'),'/admin/delete-banner/{id}','App\Http\Controllers\BannersController@deleteBanner');
Route::post('/admin/update-banner-status',[BannersController::class,'updateStatus']);

//Coupons Route
Route::match(array('GET','POST'),'/admin/add-coupon','App\Http\Controllers\CouponsController@addCoupon');
Route::match(array('GET','POST'),'/admin/view-coupons','App\Http\Controllers\CouponsController@viewCoupons');
Route::match(array('GET','POST'),'/admin/edit-coupon/{id}','App\Http\Controllers\CouponsController@editCoupon');
Route::get('/admin/delete-coupon/{id}',[CouponsController::class,'deleteCoupon']);
Route::post('/admin/update-coupon-status',[CouponsController::class,'updateStatus']);

//Category Route
Route::match(array('GET','POST'),'/admin/add-category','App\Http\Controllers\CategoryController@addCategory');
Route::match(array('GET','POST'),'/admin/view-categories','App\Http\Controllers\CategoryController@viewCategories');
Route::match(array('GET','POST'),'/admin/edit-category/{id}','App\Http\Controllers\CategoryController@editCategory');
Route::match(array('GET','POST'),'/admin/delete-category/{id}','App\Http\Controllers\CategoryController@deleteCategory');
Route::post('/admin/update-category-status',[CategoryController::class,'updateStatus']);

//Product Route
Route::match(array('GET','POST'),'/admin/add-product','App\Http\Controllers\ProductsController@addProduct');
Route::match(array('GET','POST'),'/admin/view-products','App\Http\Controllers\ProductsController@viewProducts');
Route::match(array('GET','POST'),'/admin/edit-product/{id}','App\Http\Controllers\ProductsController@editProduct');
Route::match(array('GET','POST'),'/admin/delete-product/{id}','App\Http\Controllers\ProductsController@DeleteProduct');
Route::post('/admin/update-product-status',[ProductsController::class,'updateStatus']);
Route::post('/admin/update-featured-product-status',[ProductsController::class,'updateFeatured']);

//Products Attributes
Route::match(array('GET','POST'),'/admin/add-attributes/{id}','App\Http\Controllers\ProductsController@addAttributes');
Route::get('/admin/delete-attribute/{id}', [ProductsController::class,'deleteAttribute']);
Route::match(array('GET','POST'),'/admin/edit-attributes/{id}','App\Http\Controllers\ProductsController@editAttributes');
Route::match(array('GET','POST'),'/admin/add-images/{id}','App\Http\Controllers\ProductsController@addImages');
Route::get('/admin/delete-alt-image/{id}',[ProductsController::class,'deleteAltImage']);

//Orders Route
Route::match(array('GET','POST'),'/admin/orders',[ProductsController::class,'viewOrders']);
Route::get('/admin/orders/{id}',[ProductsController::class,'viewOrderDetails']);
Route::get('/admin/order-invoice/{id}',[ProductsController::class,'orderinvoice']);

//Update Order Status
Route::post('/admin/update-order-status',[ProductsController::class,'updateOrderStatus']);
//Customers Route
Route::get('/admin/customers',[ProductsController::class,'viewCustomers']);
Route::post('/admin/update-customer-status',[ProductsController::class,'updateCustomerStatus']);
Route::get('/admin/delete-customer/{id}',[ProductsController::class,'deleteCustomer']);

});
