<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function calculateNewPrice($price)
    {
        return $price * 1.1;
    }
}
