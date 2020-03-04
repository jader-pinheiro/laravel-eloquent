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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/tester/orders/{key}', 'TesterController@getOrderTesterController'); //getOrderTesterController

Route::get('/tester/products/{key}', 'TesterController@getProductTesterController');






##EXMPLOS#################
//Route::get('/perfis',function(){
//    //return Perfil::with('usuarios')->get();
//    return DB::table('ec_sinc')
//        ->where('id_empresa','!=', $this->id_empresa)
//        ->count();
//});


//Route::get('/orders/{key}',function($id_perfil){
//     $order['orders'] = Order::with('getAddress')
//                                                ->with('getItens')
//                                                ->with('getPayments')
//                                                ->get()
//                                                ->where('status','=',$id_perfil )
//                                                ->random();
//
//
//     return json_encode($order);
//
//    //return json_encode(\App\Models\Order\Orders::get()->find($id_perfil));
//    //return \App\Orders::with('getItens')->get()->where('id_orcamento', '=', $id_perfil);
//    //return \App\ItensOrder::with('getOrders')->get()->find($id_perfil);
//});


