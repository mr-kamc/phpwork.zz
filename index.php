<?php
require __DIR__ . '/autoload.php';


$news = new \App\Models\News();
$article = $news->findLastNews(3);
var_dump($article);