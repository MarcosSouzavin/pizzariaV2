<?php

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        view('pages/home');
        break;

    case 'menu':
        $categoryModel = new Category($pdo);
        $productModel = new Product($pdo);

        $categories = $categoryModel->allActive();
        $products = $productModel->allActiveWithCategory();

        view('pages/menu', [
            'categories' => $categories,
            'products' => $products,
        ]);
        break;

    case 'cart':
        view('pages/cart');
        break;

    case 'checkout':
        view('pages/checkout');
        break;

    case 'login':
        view('auth/login');
        break;

    case 'register':
        view('auth/register');
        break;

    default:
        http_response_code(404);
        echo 'Página não encontrada.';
        break;
}