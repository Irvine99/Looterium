<?php
namespace Core;

use PDO;

class Model {
    protected $db;

    public function __construct() {
        $config = require '../config/config.php';
        $this->db = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}", 
                            $config['user'], 
                            $config['password']);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
