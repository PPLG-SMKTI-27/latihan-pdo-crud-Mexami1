<?php
require_once "customer.php";

$customer = new customer();

$customer->tambahCustomer("Bara", "A");
$customer->tambahCustomer("Ricky", "C");

echo "<h3>Data Customer</h3>";
$data = $customer->tampilCustomer();
foreach ($data as $row) {
    echo $row['id'] . " - " . $row['nama'] . " (" . $row['sim'] . ")<br>";
}


$customer->ubahCustomer(1, "Rajib", "B");

$customer->hapusCustomer(2);
?>
