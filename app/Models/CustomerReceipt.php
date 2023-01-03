<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CustomerReceipt extends Model
{
    use HasFactory;
    public $timestamps = false;

    // Declares what table is the model
    public $table = 'customer_receipt';
    public function create_customer_receipt($cart_id, $product_id)
    {
        $current_date =  now()->format('Y-m-d');
        $result = DB::insert('INSERT INTO `customer_receipt`(`cart_id`, `total`,`created_at`)
        VALUES(?, (SELECT (product.sale_price * customer_cart.quantity) FROM serverus.customer_cart, serverus.product WHERE (customer_cart.cart_id = ?) AND (customer_cart.product_id = product.product_id AND customer_cart.product_id = ?)), ?);', [$cart_id, $cart_id, $product_id, $current_date]);
        return $result;
    }
}
