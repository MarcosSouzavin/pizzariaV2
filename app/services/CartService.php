<?php

class CartService
{
    private string $sessionKey = 'cart';

    public function getCart(): array
    {
        return $_SESSION[$this->sessionKey] ?? [];
    }

    public function addItem(array $item): void
    {
        if (!isset($_SESSION[$this->sessionKey])) {
            $_SESSION[$this->sessionKey] = [];
        }

        $_SESSION[$this->sessionKey][] = $item;
    }

    public function removeItem(int $index): void
    {
        if (isset($_SESSION[$this->sessionKey][$index])) {
            unset($_SESSION[$this->sessionKey][$index]);
            $_SESSION[$this->sessionKey] = array_values($_SESSION[$this->sessionKey]);
        }
    }

    public function updateQuantity(int $index, int $quantity): void
    {
        if (isset($_SESSION[$this->sessionKey][$index])) {
            $_SESSION[$this->sessionKey][$index]['quantity'] = $quantity;
        }
    }

    public function clear(): void
    {
        unset($_SESSION[$this->sessionKey]);
    }

    public function getTotal(): float
    {
        $total = 0;

        foreach ($this->getCart() as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return $total;
    }
}