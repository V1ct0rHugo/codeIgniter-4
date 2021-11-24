<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('Shop');
    }
    public function product($type='Laptop', $product_id='Dell')
    {
        echo'<h2>This is a product: '.$type.' com id: '.$product_id.'</h2>';
       //return view('Product');
    }
    
}
