<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?? 'Mi sitio web'?></title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="mb-8">
        <?php require __DIR__ . '/navbar.php'; ?>
    </div>

    <div class="container mx-auto p-4">
    <style>
    main {
        max-width: 800px;
        margin: 2rem auto;
        padding: 0 1rem;
    }

    article {
        background-color: #f9f9f9;
        border-left: 4px solid #4CAF50;
        padding: 1rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        border-radius: 8px;
    }

    h2 {
        margin-top: 0;
        color: #333;
    }

    p {
        color: #555;
    }

    h1 {
        text-align: center;
        margin-top: 2rem;
        font-size: 2rem;
    }
</style>
