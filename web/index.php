<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('views');
$twig = new \Twig\Environment($loader);

$price = [
    "bayi" => [
        "id" => 1,
        "name" => "Bayi",
        "price" => 19900,
        "price_disc" => 14900
    ],
    "pelajar" => [
        "id" => 2,
        "name" => "Pelajar",
        "price" => 46900,
        "price_disc" => 23450
    ],
    "personal" => [
        "id" => 3,
        "name" => "Personal",
        "price" => 58900,
        "price_disc" => 38900
    ],
    "bisnis" => [
        "id" => 4,
        "name" => "Bisnis",
        "price" => 109900,
        "price_disc" => 65900
    ]
];

echo $twig->render('index.html', ['price' => $price]);