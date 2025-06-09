<?php
include_once('config.php');

$sql = "SELECT * FROM aluno";


$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
  while ($row = $resultado->fetch_assoc()) {

    $turma   = $row['fk_turma'];
    $email = $row['email'];
    $nome = $row['nome'];

    /*     print_r($turma);
    print_r($email); */
  }
}

$capitulo = $_POST['capitulo'];
$fichamento = $_POST['fichamento'];
$categoria_id = $_POST['categoria_id'];



 $result = mysqli_query($conexao, "INSERT INTO fichamento(fichamento,capitulo,turma,nome,titulo) values ('$fichamento','$capitulo','1','valdenlson','$categoria_id')");


 header('Location: livros_atualizado.php');


 if ($result()) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro: " ;
}
// Recebe os dados
/* $nome_produto = $_POST['nome_produto'];
$categoria_id = $_POST['categoria_id']; */

// Insere no banco
/* $sql = "INSERT INTO produtos (nome, categoria_id) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $nome_produto, $categoria_id); */

?>