<?php require __DIR__ . '/../layouts/header.php'; ?>

<h2>Login</h2>

<form method="POST" action="">
    <?= csrf_field() ?>
    <input type="email" name="email" placeholder="E-mail">
    <input type="password" name="password" placeholder="Senha">
    <button type="submit">Entrar</button>
</form>

<?php require __DIR__ . '/../layouts/footer.php'; ?>