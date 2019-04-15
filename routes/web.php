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
Route::post('seckill_orders', 'OrderController@seckill')->name('seckill_orders.store')->middleware('random_drop:40');
Route::redirect('/', '/products')->name('root');
Route::get('/products', 'ProductsController@index')->name('products.index');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/email_verification/send', 'EmailVerificationController@send')
        ->name('email_verification.send');
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')
        ->name('email_verify_notice');
    Route::get('/email_verification/verify', 'EmailVerificationController@verify')
        ->name('email_verification.verify');

    Route::group(['middleware' => 'email_verified'], function () {
        Route::get('user_addresses', 'UserAddressController@index')
            ->name('user_addresses.index');
        Route::get('user_addresses/create', 'UserAddressController@create')
            ->name('user_addresses.create');
        Route::post('user_addresses', 'UserAddressController@store')
            ->name('user_addresses.store');
        Route::get('user_addresses/{user_address}', 'UserAddressController@edit')
            ->name('user_addresses.edit');
        Route::put('user_addresses/{user_address}', 'UserAddressController@update')
            ->name('user_addresses.update');
        Route::delete('user_addresses/{user_address}', 'UserAddressController@destroy')->name('user_addresses.destroy');
        Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
        Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
        Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');
        Route::post('cart', 'CartController@add')->name('cart.add');
        Route::get('cart', 'CartController@index')->name('cart.index');
        Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');
        Route::post('orders', 'OrderController@store')->name('orders.store');
        Route::get('orders', 'OrderController@index')->name('orders.index');
        Route::get('orders/{order}', 'OrderController@show')->name('orders.show');
        Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
        Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');
        Route::post('orders/{order}/received', 'OrderController@received')->name('orders.received');
        Route::get('orders/{order}/review', 'OrderController@review')->name('orders.review.show');
        Route::post('orders/{order}/review', 'OrderController@sendReview')->name('orders.review.store');
        Route::post('orders/{order}/apply_refund', 'OrderController@applyRefund')->name('orders.apply_refund');
        Route::get('coupon_codes/{code}', 'CouponCodesController@show')->name('coupon_codes.show');
    });
});
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');
Route::get('products/{product}', 'ProductsController@show')->name('products.show');
