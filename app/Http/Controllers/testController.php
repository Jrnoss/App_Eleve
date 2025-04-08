<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class testController extends Controller
{
    public function index(){
        $tabs = [
           [
            'designation' => 'Orange', 
            'prix' => 200,
           ],
           [
            'designation' => 'Sucre', 
            'prix' => 300,
           ],
           [
            'designation' => 'Pomme', 
            'prix' => 600,
           ]
        ];

        // var_dump($tabs);
        // dd($tabs);
        return view("tests.test", compact("tabs"));

        
    }
}
