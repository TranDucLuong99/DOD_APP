<?php
interface ProductRepository {
    public function get($id): Product;
    public function save(Product $product): void;
    public function delete(Product $product): void;
}
