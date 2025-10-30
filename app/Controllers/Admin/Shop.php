<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }

    public function product($type, $product_id)
    {
        //echo "<h2> This is a product: ${type} with an id ${product_id}</h2>";
        //return view('product');

        echo "<h2> This is an admin product </h2>";

    }

    // protected function adminCheck(){
    //     echo "This is a protected place";
    // }
}
