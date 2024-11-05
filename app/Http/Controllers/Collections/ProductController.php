<?php

namespace App\Http\Controllers\Collections;

use App\Http\Controllers\Controller;
use App\Models\Collections\Product;
use App\Scope\HasVerifiedEmail;
use App\Scope\IsActice;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Sử dụng customs Collection
    public function TestCollection(){
        $publishProduct = Product::all()->published();
        $unpublishProduct = Product::all()->unpublished();
        $productWithComment = Product::all()->withComments();
    }

    //Sử dụng custom scope
    public function TestCustomScope(){
        $productActive = Product::query()
            ->tap(new IsActice)
            ->tap(new HasVerifiedEmail)
            ->get();
    }
}
