<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;

    // Declares what table is the model
    public $table = 'customer'; 
    
    // creates a customer record to the database
    public function create_customer($customer_name, $address, $phone_number) {
        $result = DB::insert('INSERT INTO `customer`(`customer_name`,`address`,`phone_number`) VALUES(?, ?, ?);', [$customer_name, $address, $phone_number]);
        return $result;
    }
    // retrieves a customer record from the database using the customer_name primary key
    public function retrieve_customer($customer_name) {
        $result = DB::select('SELECT * from `customer` WHERE `customer_name` = ?;', [$customer_name]);
        return $result[0];
    }
}
