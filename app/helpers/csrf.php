<?php

function csrf_token(): string
{
    if (empty($_SESSION['_csrf'])) {
        $_SESSION['_csrf'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['_csrf'];
}

function csrf_field(): string
{
    return '<input type="hidden" name="_csrf" value="' . csrf_token() . '">';
}

function validate_csrf(): bool
{
    $token = $_POST['_csrf'] ?? '';

    return isset($_SESSION['_csrf']) && hash_equals($_SESSION['_csrf'], $token);
}