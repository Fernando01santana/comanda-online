<?php
include_once 'conexao.php';
include_once 'valores.php';


$stmt = $pdo->prepare("INSERT INTO comanda(produto,qtde,mesa) VALUES(:produto,:qtde,:mesa)");
$stmt->bindValue(":produto",$pedido);
$stmt->bindValue(":qtde",$quantidade);
$stmt->bindValue(":mesa",$mesa);

$stmt->execute();
echo $stmt->rowCount();

header('Location: ../index.php');
?>