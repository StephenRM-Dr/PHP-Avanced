<?php require __DIR__ . '/partials/header.php'; ?>



    <a href="blog-create.php" class="btn">Crear nuevo blog</a>

<style>
    .btn {
        display: inline-block;
        background-color: #4CAF50;
        color: white;
        padding: 0.5rem 1rem;
        margin: 1rem 0;
        text-decoration: none;
        border-radius: 5px;
    }
</style>

    <?php
// Simulación de datos de blogs (puedes reemplazar esto con una base de datos)
$blogs = [
    ["titulo" => "Primer Blog", "contenido" => "Este es el contenido de mi primer blog."],
    ["titulo" => "Segundo Blog", "contenido" => "Aquí comparto ideas interesantes."],
    ["titulo" => "Tercer Blog", "contenido" => "¡Gracias por leer mi blog!"]
];
?>

        <h1>Publicaciones</h1>
       
  <main>
    <?php foreach ($blogs as $blog): ?>
        <article>
            <header>
                <h2><?php echo $blog["titulo"]; ?></h2>
            </header>
            <section>
                <p><?php echo $blog["contenido"]; ?></p>
            </section>
        </article>
    <?php endforeach; ?>
</main>



<?php require __DIR__ . '/partials/footer.php'; ?>
