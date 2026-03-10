<?php require __DIR__ . '/../layouts/header.php'; ?>

<h2>Cardápio</h2>

<?php if (empty($products)): ?>
    <p>Nenhum produto cadastrado no momento.</p>
<?php else: ?>

    <?php
    $groupedProducts = [];

    foreach ($products as $product) {
        $groupedProducts[$product['category_name']][] = $product;
    }
    ?>

    <?php foreach ($groupedProducts as $categoryName => $items): ?>
        <section style="margin-bottom: 40px;">
            <h3><?= h($categoryName) ?></h3>

            <div style="display:grid; gap:20px; margin-top:15px;">
                <?php foreach ($items as $product): ?>
                    <article style="background:#fff; border:1px solid #ddd; border-radius:12px; padding:20px;">
                        <h4><?= h($product['name']) ?></h4>

                        <?php if (!empty($product['description'])): ?>
                            <p style="margin:10px 0; color:#555;">
                                <?= h($product['description']) ?>
                            </p>
                        <?php endif; ?>

                        <?php if ((int) $product['is_pizza'] === 1): ?>
                            <p><strong>Tamanhos:</strong></p>

                            <?php if (!empty($product['sizes'])): ?>
                                <ul style="margin:10px 0 15px 20px;">
                                    <?php foreach ($product['sizes'] as $size): ?>
                                        <li>
                                            <?= h($size['name']) ?>
                                            -
                                            <?= format_price((float) $size['price']) ?>

                                            <?php if (!empty($size['slices'])): ?>
                                                | <?= h($size['slices']) ?> fatias
                                            <?php endif; ?>

                                            <?php if (!empty($size['people_served'])): ?>
                                                | serve <?= h($size['people_served']) ?>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <p>Sem tamanhos cadastrados.</p>
                            <?php endif; ?>

                            <?php if (!empty($product['extras'])): ?>
                                <p><strong>Extras:</strong></p>
                                <ul style="margin:10px 0 15px 20px;">
                                    <?php foreach ($product['extras'] as $extra): ?>
                                        <li>
                                            <?= h($extra['name']) ?> - <?= format_price((float) $extra['price']) ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                        <?php else: ?>
                            <p style="margin:12px 0;">
                                <strong>Preço:</strong>
                                <?= format_price((float) $product['base_price']) ?>
                            </p>
                        <?php endif; ?>

                        <button class="add-to-cart" data-name="<?= h($product['name']) ?>"
                            data-price="<?= $product['base_price'] ?>">
                            Adicionar ao carrinho
                        </button>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endforeach; ?>

<?php endif; ?>

<?php require __DIR__ . '/../layouts/footer.php'; ?>