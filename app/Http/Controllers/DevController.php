<?php

namespace App\Http\Controllers;

class DevController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function choujiang()
    {
        $module = app('request')->input('num');
        if($module == 2){
            echo "122";
        }
    }
}
