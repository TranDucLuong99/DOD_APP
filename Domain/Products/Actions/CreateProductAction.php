<?php

class CreateProductAction
{
    public function __construct(private readonly ImportProductWarehouseAction $importProductWarehouseAction)
    {
    }
    public function handle() {
        /** Thực hiện nghiệp vụ tạo sản phẩm**/
        /** Gọi sang Action Nhập kho sản phẩm **/
        $this->importProductWarehouseAction->handle();
        /** Kích hoạt nghiệp vụ sau khi tạo sản phẩm thành công**/
        event(new AfterCreateProduct);
    }

}
