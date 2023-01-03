<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CustomerCart extends Model
{
    use HasFactory;
    public $timestamps = false;

    // Declares what table is the model
    public $table = 'customer_cart'; 

    // inserts a new record in the customer_cart table
    public function insert_record($product_id, $quantity, $customer_name) {
        DB::insert('INSERT INTO `customer_cart`(`product_id`,`quantity`,`customer_name`) VALUES (?, ?, ?);', [$product_id, $quantity, $customer_name]);
    }

    public function create_customer_cart($product_id, $quantity, $customer_name) {
        $product = new Product;

        // insert a new record in the customer_cart table
        $this->insert_record($product_id, $quantity, $customer_name);

        // retrieves the last insert id
        $result = $this->retrieve_last_insert_id();
        
        // subtracts the quantity of the product in stock.
        $product->reduce_quantity_because_it_was_sold($product_id, $quantity);
        return $result;
    }

    public function retrieve_last_insert_id() {
        $cart_id = DB::getPdo()->lastInsertId();
        return $cart_id;
    }
}
