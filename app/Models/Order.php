<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    private static $order;
    public static function newOrder($request, $customer){
        self::$order = new Order();
        self::$order->customer_id       = $customer->id;
        self::$order->shipping_area_id  = $request->area;
        self::$order->order_total       = $request->order_total;
        self::$order->tax_total         = $request->tax_total;
        self::$order->shipping_total    = $request->shipping_total;
        self::$order->order_date        = date('y-m-d');
        self::$order->order_timestamp   = strtotime(date('y-m-d'));
        self::$order->delivery_address  = $request->address;
        self::$order->payment_method    = $request->payment_method;
        self::$order->save();
        return self::$order;
    }
}
