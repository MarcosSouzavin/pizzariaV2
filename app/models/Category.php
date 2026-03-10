<?php

class Category
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function allActive(): array
    {
        $sql = "
            SELECT id, name, slug, description
            FROM categories
            WHERE is_active = 1
            ORDER BY name ASC
        ";

        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
}