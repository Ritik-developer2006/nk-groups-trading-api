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

    public function testMySql(Request $request){

        $data = $this->testModel->testMySql();
        return response()->json($data,200);
        
    }

    public function testSql(Request $request){

        $data = $this->testModel->testSql();
        return response()->json($data,200);
        
    }
}
