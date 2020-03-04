<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Model;

class OrdersItens extends Model
{
    protected $table = 'sales_order_item';
    protected $primaryKey  =  'order_id';
}
