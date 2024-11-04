<?php
namespace Domain;
class ProductEntity
{
    private $id;
    private $name;
    private $price;
    private $remain;

    /**
     * @param $id
     * @param $name
     * @param $price
     * @param $remain
     */
    public function __construct($id, $name, $price, $remain)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->remain = $remain;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getRemain()
    {
        return $this->remain;
    }

    //return $productEntity->getRemain(); // Lấy ra số sản phẩm tồn kho.
}
