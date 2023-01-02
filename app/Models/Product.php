<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $primaryKey = 'product_id';

    // Declares what table is the model
    public $table = 'product';

    // the add method allows you to insert a new product in the table "product"
    public function add($product_name, $quantity, $cost_price, $sale_price)
    {
        // Retrieves the name of the inventory
        $inventory_name = Inventory::show()->inventory_name;
        DB::insert('INSERT INTO product (`product_name`, `quantity`, `cost_price`, `sale_price`, `inventory_name`) VALUES (?, ?, ?, ?, ?)', [$product_name, $quantity, $cost_price, $sale_price, $inventory_name]);
    }
    //  the edit method allows you to edit a product
    public function edit($product_id, $product_name, $quantity, $cost_price, $sale_price)
    {
        DB::update('UPDATE product SET `product_name` = ?,`quantity` = ?, `cost_price` = ?, `sale_price` = ? WHERE `product_id` = ?;', [$product_name, $quantity, $cost_price, $sale_price, $product_id]);
    }
    //  the delete method allows you to delete a product
    public function delete_product($product_id) {
        DB::delete('DELETE FROM product WHERE product_id = ?', [$product_id]);
    }
}
