<?php
require __DIR__ . '/config/db.php'; // Tu archivo de conexión PDO

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];

    $stmt = $pdo->prepare("INSERT INTO blogs (titulo, contenido) VALUES (:titulo, :contenido)");
    $stmt->execute([
        ':titulo' => $titulo,
        ':contenido' => $contenido
    ]);

    header("Location: index.php"); // Vuelve a la vista principal
    exit;
}
?>
