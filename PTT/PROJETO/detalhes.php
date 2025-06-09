<?php
include_once('config.php');

$id = intval($_GET['id']);

$sql = "SELECT * FROM livro WHERE id = $id";

$result = $conexao->query($sql);

if ($result->num_rows === 0) {
  die("Usuário não encontrado.");
}

$user = $result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do usuário</title>
</head>
<body>
    <h2>Detalhes do Usuário</h2>
  <p><strong>ID:</strong> <?php echo $user['id']; ?></p>
  <p><strong>Livro:</strong> <?php echo htmlspecialchars($user['livro']); ?></p>
  <p><strong>Autor:</strong> <?php echo htmlspecialchars($user['autor']); ?></p>
  <a href="index.php">Voltar</a>
</body>
</html>