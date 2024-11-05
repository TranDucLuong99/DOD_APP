<?php

namespace App\Collections;

use Illuminate\Database\Eloquent\Collection;

class ProductCollection extends Collection
{

    //Khai báo các phương thức collections
    public function published(){
        return $this->filter(function ($product){
            return $product->is_published;
        });
    }

    public function unpublished(){
        return $this->filter(function ($product){
            return !$product->is_published;
        });
    }

    public function withComments(){
        return $this->filter(function ($product){
            return $product->comments()->count() > 0;
        });
    }


}
