<?php

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

Route::get('/', [
    'uses' => 'ElectroStoreController@index',
    'as'   => '/'
]);

Route::get('/category-product/{id}', [
    'uses' => 'ElectroStoreController@categoryProduct',
    'as'   => 'category-product'
]);

Route::get('/product-details/{id}/{name}', [
    'uses'  =>  'ElectroStoreController@productDetails',
    'as'    =>  'product-details'
]);

Route::post('/cart/add', [
    'uses'  =>  'CartController@addToCart',
    'as'    =>  'add-to-cart'
]);

Route::get('/cart/show', [
    'uses'  =>  'CartController@showCart',
    'as'    =>  'show-cart'
]);

Route::get('/cart/delete/{id}', [
    'uses'  =>  'CartController@deleteCart',
    'as'    =>  'delete-cart-item'
]);

Route::post('/cart/update', [
    'uses'  =>  'CartController@updateCart',
    'as'    =>  'update-cart'
]);

Route::get('/checkout', [
    'uses'  =>  'CheckoutController@index',
    'as'    =>  'checkout'
]);

Route::post('/customer/registration', [
    'uses'  =>  'CheckoutController@customerSignUp',
    'as'    =>  'customer-sign-up'
]);

Route::post('/customer/customer-login', [
    'uses'  =>  'CheckoutController@customerLoginCheck',
    'as'    =>  'customer-login'
]);

Route::post('/customer/customer-logout', [
    'uses'  =>  'CheckoutController@customerLogout',
    'as'    =>  'customer-logout'
]);

Route::get('/customer/new-customer-login', [
    'uses'  =>  'CheckoutController@newCustomerLogin',
    'as'    =>  'new-customer-login'
]);

Route::get('/checkout/shipping', [
    'uses'  =>  'CheckoutController@shippingForm',
    'as'    =>  'checkout-shipping'
]);
Route::post('/shipping/save', [
    'uses'  =>  'CheckoutController@saveShippingInfo',
    'as'    =>  'new-shipping'
]);
Route::get('/checkout/payment', [
    'uses'  =>  'CheckoutController@paymentForm',
    'as'    =>  'checkout-payment',
    'middleware' => 'test'
]);
Route::post('/checkout/order', [
    'uses'  =>  'CheckoutController@newOrder',
    'as'    =>  'new-order'
]);

Route::get('/complete/order', [
    'uses'  =>  'CheckoutController@completeOrder',
    'as'    =>  'complete-order'
]);

Route::get('/mail-us', [
    'uses' => 'ElectroStoreController@mailUs',
    'as'   => 'mail-us'
]);

Route::get('/category/add', [
    'uses' => 'CategoryController@index',
    'as'   => 'add-category'
]);

Route::get('/category/manage', [
    'uses' => 'CategoryController@manageCategory',
    'as'   => 'manage-category'
]);

Route::post('/category/save', [
    'uses' => 'CategoryController@saveCategory',
    'as'   => 'new-category'
]);

Route::get('/category/unpublished/{id}', [
    'uses'  =>  'CategoryController@unpublishedCategoryInfo',
    'as'    =>  'unpublished-category'
]);

Route::get('/category/published/{id}', [
    'uses'  =>  'CategoryController@publishedCategoryInfo',
    'as'    =>  'published-category'
]);

Route::get('/category/edit/{id}', [
    'uses'  =>  'CategoryController@editCategoryInfo',
    'as'    =>  'edit-category'
]);

Route::post('/category/update', [
    'uses'  =>  'CategoryController@updateCategoryInfo',
    'as'    =>  'update-category'
]);

Route::get('/category/delete/{id}', [
    'uses'  =>  'CategoryController@deleteCategoryInfo',
    'as'    =>  'delete-category'
]);

Route::get('/brand/add', [
    'uses'  =>  'BrandController@index',
    'as'    =>  'add-brand'
]);

Route::get('/brand/manage', [
    'uses'  =>  'BrandController@manageBrand',
    'as'    =>  'manage-brand'
]);

Route::post('/brand/save', [
    'uses'  =>  'BrandController@saveBrand',
    'as'    =>  'new-brand'
]);

Route::get('/product/add', [
    'uses'  =>  'ProductController@index',
    'as'    =>  'add-product'
]);

Route::post('/product/save', [
    'uses'  =>  'ProductController@saveProduct',
    'as'    =>  'new-product'
]);

Route::get('/product/manage', [
    'uses'  =>  'ProductController@manageProduct',
    'as'    =>  'manage-product'
]);

Route::get('/product/edit/{id}', [
    'uses'  =>  'ProductController@editProduct',
    'as'    =>  'edit-product'
]);

Route::post('/product/update', [
    'uses'  =>  'ProductController@updateProduct',
    'as'    =>  'update-product'
]);

Route::get('/order/manage-order', [
    'uses'  =>  'OrderController@manageOrderInfo',
    'as'    =>  'manage-order'
]);

Route::get('/order/view-order-details/{id}', [
    'uses'  =>  'OrderController@viewOrderDetails',
    'as'    =>  'view-order-details'
]);

Route::get('order/view-order-invoice/{id}',[
    'uses' => 'OrderController@viewOrderInvoice',
    'as'   => 'view-order-invoice'
]);

Route::get('order/download-invoice/{id}',[
    'uses' => 'OrderController@downloadOrderInvoice',
    'as'   => 'download-invoice'
]);

Route::get('/order/delete/{id}', [
    'uses'  =>  'OrderController@deleteOrderInfo',
    'as'    =>  'delete-order'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
