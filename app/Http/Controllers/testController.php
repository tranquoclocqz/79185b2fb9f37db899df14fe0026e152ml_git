<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function test(){
    	echo _slug('Trần Quốc Lộc');
    }
}
