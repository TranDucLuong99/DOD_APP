<?php

namespace App\Http\Controllers\ImportantDesignPattern\InitiationGroup\Builder;

class OrderBuilder
{
    private $order;

    public function __construct()
    {
        $this->order = new Order();
    }

    public function setName($name){
        $this->order->setName($name);
        return $this;
    }

    public function setPrice($price){
        $this->order->setPrice($price);
        return $this;
    }

    public function setDescription($description){
        $this->order->setDescription($description);
        return $this;
    }

    public function build() {
        return $this->order;
    }

}
