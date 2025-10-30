<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
       echo "<h2>This is User Area</h2>";
    }

    public function getAllUsers()
    {
        //echo "<h2> This is a product: ${type} with an id ${product_id}</h2>";
        //return view('product');

        echo "<h2> Show all users </h2>";

    }

    // protected function adminCheck(){
    //     echo "This is a protected place";
    // }
}
