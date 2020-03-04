<?php

namespace App\Http\Controllers;

use App\Models\Order\Orders as Order;


class TesterController extends Controller
{
    public function getOrderTesterController($key)
    {

        $getOrder = Order::with('getAddress')
            ->with('getItens')
            ->with('getPayments')
            ->get()
            ->where('status', '=', $key)
            ->random()->toJson();

        #monta as variáveis para serem usadas na inserção de pedidos
        $order = json_decode($getOrder);
        $itens = $order->get_itens; #array
        $address = $order->get_address;
        $payment = $order->get_payments;

        $descEndereco = explode("\n", $address->street);

        return json_encode($order);

    }
}
