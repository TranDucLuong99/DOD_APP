<?php
namespace App\Http\Controllers\ImportantDesignPattern\Singleton;
class Database {
// Thuộc tính tĩnh lưu trữ thể hiện duy nhất của lớp Database
    private static $instance = null;
    private $connection;
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'example_db';
// Constructor được khai báo private để ngăn việc khởi tạo đối tượng từ bên ngoài
    private function __construct() {
        $this->connection = new \mysqli($this->host, $this->username,
            $this->password, $this->database);
// Kiểm tra kết nối
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }
// Sử dụng static để đảm bảo chỉ khởi tạo duy nhất một instance
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
// Phương thức để lấy kết nối
    public function getConnection() {
        return $this->connection;
    }
}
