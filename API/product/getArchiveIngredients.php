<?php
require("../../COMMON/connect.php");
require("../../MODEL/product.php");

if (isset($_GET["ingredient_id"]))
    $ingredient_id = $_GET["ingredient_id"];

$database = new Database();
$db_connection = $database->connect();

$controller = new ProductController($db_connection);

$controller->GetArchiveIngredients($ingredient_id);
/*if (strlen($ingredient_id) > 2) {
    $controller->GetArchiveIngredients($ingredient_id);
} else {
    $controller->SendError(array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
}*/
?>
