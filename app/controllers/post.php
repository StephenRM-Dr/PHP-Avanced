<?php


$title = 'Post';

$post = $db->query('SELECT * FROM posts where id = :id',[
    'id' => $_GET['id'] ?? null,
])->firstOrFail();


require __DIR__ . '/../../resources/post.template.php';
