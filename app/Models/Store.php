<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Store extends Model
{
    public $timestamps = false;
    public $incrementing = false;

    // Declares what table is the model
    public $table = 'store'; 
    use HasFactory;
    public static function show() {
        $result = DB::select("select store_name from store");
        return $result[0];
    }
}
