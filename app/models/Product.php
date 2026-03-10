<?php

class Product
{
    public function __construct(private PDO $pdo)
    {
    }

    public function allActiveWithCategory(): array
    {
        $sql = "
            SELECT
                p.id,
                p.category_id,
                p.name,
                p.slug,
                p.description,
                p.base_price,
                p.image,
                p.is_pizza,
                p.is_featured,
                c.name AS category_name
            FROM products p
            INNER JOIN categories c ON c.id = p.category_id
            WHERE p.is_active = 1
              AND c.is_active = 1
            ORDER BY c.name ASC, p.name ASC
        ";

        $stmt = $this->pdo->query($sql);
        $products = $stmt->fetchAll();

        foreach ($products as &$product) {
            if ((int)$product['is_pizza'] === 1) {
                $product['sizes'] = $this->getSizesByProductId((int)$product['id']);
                $product['extras'] = $this->getExtrasByProductId((int)$product['id']);
            } else {
                $product['sizes'] = [];
                $product['extras'] = [];
            }
        }

        return $products;
    }

    public function getByCategoryId(int $categoryId): array
    {
        $sql = "
            SELECT
                p.id,
                p.category_id,
                p.name,
                p.slug,
                p.description,
                p.base_price,
                p.image,
                p.is_pizza,
                p.is_featured
            FROM products p
            WHERE p.category_id = :category_id
              AND p.is_active = 1
            ORDER BY p.name ASC
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['category_id' => $categoryId]);
        $products = $stmt->fetchAll();

        foreach ($products as &$product) {
            if ((int)$product['is_pizza'] === 1) {
                $product['sizes'] = $this->getSizesByProductId((int)$product['id']);
                $product['extras'] = $this->getExtrasByProductId((int)$product['id']);
            } else {
                $product['sizes'] = [];
                $product['extras'] = [];
            }
        }

        return $products;
    }

    public function getSizesByProductId(int $productId): array
    {
        $sql = "
            SELECT id, product_id, name, price, slices, people_served
            FROM product_sizes
            WHERE product_id = :product_id
              AND is_active = 1
            ORDER BY price ASC
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['product_id' => $productId]);
        return $stmt->fetchAll();
    }

    public function getExtrasByProductId(int $productId): array
    {
        $sql = "
            SELECT id, product_id, name, price
            FROM product_extras
            WHERE product_id = :product_id
              AND is_active = 1
            ORDER BY name ASC
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['product_id' => $productId]);
        return $stmt->fetchAll();
    }
}