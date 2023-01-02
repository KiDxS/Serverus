<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;

    // Declares what table is the model
    public $table = 'inventory'; 
}
