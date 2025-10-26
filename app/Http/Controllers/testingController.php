<?php

namespace App\Http\Controllers;

use App\Models\testModel;
use Illuminate\Http\Request;

class testingController extends Controller
{
    protected testModel $testModel;
    
    public function __construct()
    {
        $this->testModel = new testModel;
    }

    public function testMongo(Request $request){

        $data = $this->testModel->testMongo();
        return response()->json($data,200);
        
    }
}
