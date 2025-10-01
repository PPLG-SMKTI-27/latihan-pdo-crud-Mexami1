<?php
require_once "Database.php";
class Customer {
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function tambahCustomer($nama, $sim) {
        $sql = "INSERT INTO customer (nama, sim) VALUES (:nama, :sim)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":sim", $sim);
        return $stmt->execute();
    }

    public function tampilCustomer() {
        $sql = "SELECT * FROM customer";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ubahCustomer($id, $nama, $sim) {
        $sql = "UPDATE customer SET nama=:nama, sim=:sim WHERE id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":sim", $sim);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
