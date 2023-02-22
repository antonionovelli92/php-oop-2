<?php
include __DIR__ . '/../newmodels/Category.php';
include __DIR__ . '/../newmodels/ToyProduct.php';
include __DIR__ . '/../newmodels/FoodProduct.php';

$dog_category = new Category('Dog', 'fa-solid fa-dog');
$cat_category = new Category('Cat', 'fa-solid fa-cat');

$food = new FoodProduct('Scatoletta', 'Cibo in scatola per gatti', 5.50, $cat_category, ['carne', 'additivi'], '2023-11-01');
$cibo = new FoodProduct('Scatoletta', 'Cibo in scatola per gatti', 5.50, $dog_category, ['carne', 'additivi'], '2023-11-01');

$toy = new ToyProduct('Gommosso', 'Osso di gomma per cagnolini', 5.50, $dog_category, ['gomma', 'plastica'], 'rosso');
$giocattolo = new ToyProduct('Gommosso', 'Osso di gomma per cagnolini', 5.50, $cat_category, ['gomma', 'plastica'], 'rosso');




$food_products = [$food, $cibo];
$toy_products = [$toy, $giocattolo];
