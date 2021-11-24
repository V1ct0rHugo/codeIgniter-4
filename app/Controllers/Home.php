<?php namespace App\Controllers;

use App\Controllers\Admin\Shop;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    function validation()
    {
        $shop = new Shop();
        echo $shop->product('laptop','lenovo');

        //$shop
    }

}
