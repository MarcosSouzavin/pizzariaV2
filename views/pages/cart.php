<?php

$cartService = new CartService();
$cart = $cartService->getCart();
$total = $cartService->getTotal();

require __DIR__ . '/../layouts/header.php';

?>

<h2>Seu Carrinho</h2>

<?php if (empty($cart)): ?>

<p>Carrinho vazio.</p>

<?php else: ?>

<table border="1" cellpadding="10">

<tr>
<th>Produto</th>
<th>Preço</th>
<th>Qtd</th>
<th>Total</th>
</tr>

<?php foreach ($cart as $index => $item): ?>

<tr>

<td><?= h($item['name']) ?></td>

<td><?= format_price($item['price']) ?></td>

<td><?= $item['quantity'] ?></td>

<td><?= format_price($item['price'] * $item['quantity']) ?></td>

</tr>

<?php endforeach; ?>

</table>

<h3>Total: <?= format_price($total) ?></h3>

<?php endif; ?>

<?php require __DIR__ . '/../layouts/footer.php'; ?>