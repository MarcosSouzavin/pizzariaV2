<?php

function base_url(string $path = ''): string
{
    $base = rtrim(APP_URL, '/');
    $path = ltrim($path, '/');

    return $path ? "{$base}/{$path}" : $base;
}

function view(string $view, array $data = []): void
{
    extract($data);
    require __DIR__ . "/../../views/{$view}.php";
}

function redirect(string $path): void
{
    header('Location: ' . base_url($path));
    exit;
}

function h(mixed $value): string
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

function old(string $key, mixed $default = ''): mixed
{
    return $_SESSION['old'][$key] ?? $default;
}

function flash(string $key, ?string $message = null): ?string
{
    if ($message !== null) {
        $_SESSION['flash'][$key] = $message;
        return null;
    }

    $value = $_SESSION['flash'][$key] ?? null;
    unset($_SESSION['flash'][$key]);

    return $value;
}

function format_price (float $price): string
{
    return 'R$ ' . number_format($price, 2, ',', '.');
}