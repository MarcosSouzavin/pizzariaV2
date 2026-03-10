<?php

function auth_user(): ?array
{
    return $_SESSION['user'] ?? null;
}

function is_logged_in(): bool
{
    return isset($_SESSION['user']);
}

function is_admin(): bool
{
    return isset($_SESSION['user']) && ($_SESSION['user']['role'] ?? '') === 'admin';
}