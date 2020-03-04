<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    protected $table = 'sales_order_payment';
    protected $primaryKey  =  'entity_id';
}
