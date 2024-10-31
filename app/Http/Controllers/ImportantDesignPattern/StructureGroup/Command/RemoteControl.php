<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Command;
// Class nhận vào Command và gọi đến Handler tương ứng
class RemoteControl {
    private $command;
    public function setCommand(Command $command) {
        $this->command = $command;
    }
    public function pressButton() {
        $this->command->execute();
    }
}



