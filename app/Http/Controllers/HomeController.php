<?php

namespace App\Http\Controllers;

abstract class HomeController
{
    public function dokter()
    {
        return view('dokter.index');
    }

}



