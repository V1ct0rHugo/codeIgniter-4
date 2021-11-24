<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        echo'<h2>This is a Admin shop...</h2>';
        //return view('Shop');
    }
    public function product($type, $product_id)
    {
       echo'<h2>This is a admin product</h2>'; 
       //echo'<h2>This is a product: '.$type.' com id: '.$product_id.'</h2>';
       //return view('Product');
    }
    protected function adminCheck()
    {
        echo'Zona de segurança!';
    }
}
