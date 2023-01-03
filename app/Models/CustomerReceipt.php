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
        VALUES(?, (SELECT (product.sale_price * customer_cart.quantity) FROM  customer_cart,  product WHERE (customer_cart.cart_id = ?) AND (customer_cart.product_id = product.product_id AND customer_cart.product_id = ?)), ?);', [$cart_id, $cart_id, $product_id, $current_date]);
        return $result;
    }

    // deletes the receipt, the cart, and the customer.
    public function delete_customer_receipt($receipt_id) {
        $result = DB::delete('DELETE `customer_receipt`, `customer_cart`, `customer` FROM `customer_receipt` INNER JOIN customer_cart INNER JOIN customer WHERE (customer_receipt.receipt_id = ?) AND (customer_receipt.cart_id = customer_cart.cart_id) AND (customer_cart.customer_name = customer.customer_name);', [$receipt_id]);
        return $result;
    }

    public function retrieve_all_customer_receipts() {
        $result = DB::select('SELECT `customer_receipt`.`receipt_id`, `customer_cart`.`customer_name` FROM  `customer_receipt`,  `customer_cart` WHERE (`customer_receipt`.`cart_id` = `customer_cart`.`cart_id`);');
        return $result;
    }
}
