<?php



if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $data = App\Models\Article::findById($id);
}
include __DIR__ . '/views/Article.php';
