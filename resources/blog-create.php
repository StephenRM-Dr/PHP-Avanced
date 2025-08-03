<?php require __DIR__ . '/partials/header.php'; ?>

<h1>Crear nuevo blog</h1>
<form action="guardar_blog.php" method="POST">
    <label for="titulo">Título:</label><br>
    <input type="text" name="titulo" required><br><br>

    <label for="contenido">Contenido:</label><br>
    <textarea name="contenido" rows="6" required></textarea><br><br>

    <button type="submit">Publicar</button>
</form>

<?php require __DIR__ . '/partials/footer.php'; ?>
