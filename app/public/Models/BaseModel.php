<?php

// Create connection, khởi tạo tên của lớp
class Connection
{
    public $conn;
    /**khai báo biến conn */

    protected $servername = "mysql";
    /** thuộc tính của class */
    protected $database = "rikkeisoft";
    protected $username = "root";
    protected $password = "root";

    function __construct()
    {
        /** kết nối database */
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
    }
}
