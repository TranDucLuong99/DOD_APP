<?php

namespace App\Http\Controllers\ImportantDesignPattern\InitiationGroup\Builder;

class Order
{
    private $name;
    private $price;
    private $description;

    public function setName($name) {
        $this->name = $name;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function setDescription($description) {
        $this->description = $description;
    }

    public function __toString(){
        return "{$this->name} {$this->price} {$this->description}";
    }
}
