<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model{

    protected $table = "categories";
    public function products(){
        // từ bảng category có nhiều bảng products
        $this->hasMany(Product::class, 'cate_id');
    }  
}

?>