<?php require __DIR__ . '/../layouts/header.php'; ?>

<h2>Cadastro</h2>

<form method="POST" action="">
    <?= csrf_field() ?>
    <input type="text" name="name" placeholder="Nome">
    <input type="email" name="email" placeholder="E-mail">
    <input type="password" name="password" placeholder="Senha">
    <button type="submit">Cadastrar</button>
</form>

<?php require __DIR__ . '/../layouts/footer.php'; ?>