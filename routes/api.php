<?php

$action = $_GET['action'] ?? null;

$cartService = new CartService();

switch ($action) {

    case 'add':

        $productName = $_POST['name'] ?? '';
        $price = (float)($_POST['price'] ?? 0);

        $cartService->addItem([
            'name' => $productName,
            'price' => $price,
            'quantity' => 1
        ]);

        jsonResponse([
            'success' => true
        ]);

        break;

    case 'remove':

        $index = (int)($_POST['index'] ?? -1);

        $cartService->removeItem($index);

        jsonResponse([
            'success' => true
        ]);

        break;

    case 'list':

        jsonResponse([
            'cart' => $cartService->getCart(),
            'total' => $cartService->getTotal()
        ]);

        break;

}