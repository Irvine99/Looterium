<?php
namespace App\Models;

use core\Model;
use PDO;

class Product extends Model {
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
