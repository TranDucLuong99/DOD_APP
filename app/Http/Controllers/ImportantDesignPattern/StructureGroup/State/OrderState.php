<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\State;
// Interface trạng thái đơn, trong đó có cho phép đơn được thao tác hay không
interface OrderState {
    public function getStatus();
    public function allowProcessing();
}
