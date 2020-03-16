<?php
require "vendor/autoload.php";
$slugifier = new \Slug\Slugifier();
$titulo = "FELIPE GOMES MENDES DA SILVA";
$slug = $slugifier->slugify($titulo);
echo'<p> Titulo original: ' .$titulo. "</p>";
echo'<p> URL Produto (SLUG): ' .$slug. "</p>";