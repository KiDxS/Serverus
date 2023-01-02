<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inventory extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;

    // Declares what table is the model
    public $table = 'inventory'; 

    public static function show() {
        $result = DB::select("select inventory_name from inventory");
        return $result[0];
    }
}
