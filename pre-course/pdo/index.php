<?php
require 'config/config.php';

// Set DSN
$dsn = "mysql:host=" . DB_HOST . "; dbname=" . DB_NAME;

// Create a PDO instance
$pdo = new PDO($dsn, DB_USER, DB_PASS);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// PDO Query
/*
$stmt = $pdo->query('SELECT * FROM Posts');

while ($row = $stmt->fetch()) {
    print_r($row);
}
*/

# PREPARED STATEMENTS (prepare & execute)

// Unsafe
// $sql = "SELECT * FROM posts WHERE author = '$author'";

// FETCH MULTIPLE POSTS

// User Input
$author = "Trong Hieu";
$is_publised = true;
$id = 1;

// Positional Params
/*
$sql = "SELECT * FROM Posts WHERE author = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$author]);
$posts = $stmt->fetchAll();

foreach ($posts as $post) {
    echo $post->title . '<br>';
}
*/

// Named Params
/*
$sql = "SELECT * FROM Posts WHERE author = :author && is_published = :is_published";
$stmt = $pdo->prepare($sql);
$stmt->execute(['author' => $author, 'is_published' => $is_publised]);
$posts = $stmt->fetchAll();

foreach ($posts as $post) {
    echo $post->title . '<br>';
}
*/

// FETCH SINGLE POST
/*
$sql = "SELECT * FROM Posts WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$post = $stmt->fetch();

print_r($post);
echo '<br>';

echo $post->title;
*/










































