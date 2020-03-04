<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Model;

class OrderAddress extends Model
{
    protected $table = 'sales_order_address';
    protected $primaryKey  =  'entity_id';
}
