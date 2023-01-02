<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReceipt extends Model
{
    use HasFactory;
    public $timestamps = false;

    // Declares what table is the model
    public $table = 'customer_receipt'; 
}
