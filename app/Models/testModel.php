<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class testModel extends Model
{
    public function testMongo(){
        $result = DB::connection('mongodb')
                    ->table('myOrder')
                    ->select('*')
                    ->get();
        // echo "<pre>";  
        // print_r($result);
        // die;
        return $result;
    }
}
