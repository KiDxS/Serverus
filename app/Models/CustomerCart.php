<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerCart extends Model
{
    use HasFactory;
    public $timestamps = false;

    // Declares what table is the model
    public $table = 'customer_cart'; 

    public function insert_record($product_id, $quantity, $customer_name) {
        DB::insert('INSERT INTO `customer_cart`(`product_id`,`quantity`,`customer_name`) VALUES (?, ?, ?);', [$product_id, $quantity, $customer_name]);
    }

    public function create_customer_cart($product_id, $quantity, $customer_name) {
        $this->insert_record($product_id, $quantity, $customer_name);
        $result = $this->retrieve_last_insert_id();
        return $result;
    }

    public function retrieve_last_insert_id() {
        $cart_id = DB::getPdo()->lastInsertId();
        return $cart_id;
    }

}
