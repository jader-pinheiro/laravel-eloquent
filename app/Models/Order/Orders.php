<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Model;


class Orders extends Model
{
    protected $table = 'sales_order';
    protected $primaryKey  =  'entity_id';

    public function getAddress(){
        # LIGAÇÃO DO INNERJOIN foreign key é o campo da tabela que vai fazer o innjoin com o localKey da variavel $table
        return $this->hasOne('\App\Models\Order\OrderAddress','entity_id','shipping_address_id');
    }

    public function getItens(){
        # LIGAÇÃO DO INNERJOIN
        return $this->hasMany('\App\Models\Order\OrdersItens','order_id','entity_id');
    }

    public function getPayments(){
        # LIGAÇÃO DO INNERJOIN
        return $this->hasOne('\App\Models\Order\OrderPayment','parent_id','entity_id');
    }
}
