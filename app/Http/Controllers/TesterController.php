<?php

namespace App\Http\Controllers;

use App\Models\Order\Orders as Order;
use App\Models\Product\Product as Product;
use Illuminate\Support\Facades\DB;


class TesterController extends Controller
{
    public function getOrderTesterController($key)
    {

//        $getOrder = Order::with('getAddress')
//            ->with('getItens')
//            ->with('getPayments')
//            ->get()
//            ->where('status', '=', $key)
//            ->random()->toJson();
//
//        #monta as variáveis para serem usadas na inserção de pedidos
//        $order = json_decode($getOrder);
//        $itens = $order->get_itens; #array
//        $address = $order->get_address;
//        $payment = $order->get_payments;
//
//        $descEndereco = explode("\n", $address->street);
//
//        return json_encode($order);

    }

    public function getProductTesterController($key){


       /// dd($key);
        $getProducts[]= Product::get()->find($key);
//        return $getProducts;
//        $getTeste = Product::query(DB::select("select descricao from ec_produto where id_produto = $key"));

        $quantidade = DB::select("select get_saldo_ec($key, 8, 5) as qty from ec_produto where id_produto =$key ");

//$retorno = array_push($quantidade, $getProducts);

//dd($quantidade);

        //$getTeste = Product::;

        return Product::hydrate($quantidade)->load('App\Models\Product\Product');

       // return $retorno;



    }
}
