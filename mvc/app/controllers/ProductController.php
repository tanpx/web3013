<?php
namespace App\Controllers;
class ProductController extends BaseController{
    public function index(){
        $this->render('products.index');
    }
}

?>