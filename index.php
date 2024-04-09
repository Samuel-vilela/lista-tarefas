<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tarefas</title>
</head>
<body>


<?php
$livros = [
  ["titulo" => "Aprendendo PHP", "autor" => "João da Silva", "preco" => 99.99],
  ["titulo" => "HTML básico", "autor" => "Maria dos Santos", "preco" => 59.90],
];
?>

<ul>
  <?php foreach ($livros as $livro): ?>
    <li>
      <h3><?php echo $livro['titulo']; ?></h3>
      <p>Autor: <?php echo $livro['autor']; ?></p>
      <p>Preço: <?php echo($livro['preco']); ?></p>
    </li>
  <?php endforeach; ?>
</ul>
