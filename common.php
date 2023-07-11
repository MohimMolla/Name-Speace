<?php
// require "account.php";
// require "bank.php";

// new App\Bank();
// echo "<br>";

// new App\Example\Bank();
?>

<?php 
require "bank.php";

class Bar
{
	use  Bank;
}
$object = new Bar();

$object ->abc();
echo "<br>";
$object ->efg();

?>