<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\facades\DB;

class Outlet extends Model
{
    use HasFactory;

    public function allData(){
        return DB::table('outlets')->get();
    }
}
