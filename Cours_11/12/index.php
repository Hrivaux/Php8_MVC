<?php
require_once 'classes/Product.php';
require_once 'classes/ProductRect.php';
require_once 'classes/ProductCirc.php'; // Ajout de ProductCirc.php
require_once 'classes/SpamChecker.php';
require_once 'classes/Email.php';

$product = new Product("Livre", 4.5);
var_dump($product);

echo $product->getPriceVatFree();
echo '</br>';
echo $product->getFullPrice(0.2);

var_dump(SpamChecker::SPAM_DOMAINS);

try {
    $email = new Email("test@example.com"); // Utilisation d'un exemple d'email valide
    var_dump($email);
} catch (Exception $e) {
    echo $e->getMessage(); // Affiche le message de l'exception
    exit;
}

$rectProduct = new ProductRect("rectangle", 456.5, 78, 52);
var_dump($rectProduct);


$circProduct = new ProductCirc("circular", 10.0, 87);
var_dump($circProduct);
