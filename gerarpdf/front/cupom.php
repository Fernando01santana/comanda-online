<?php
//include '../PDO/conexao.php';

$pedido = $_GET['pizza'];
$quantidadePizza = $_GET['quantidade_pizza'];
$marca = $_GET['marca'];
$tamanho = $_GET['tamanho'];
$mesa = $_GET['mesa'];
$quantidade = $_GET['quantidade'];
$sabor = $_GET['sabor'];
$mesa = $_GET['mesa'];		
  date_default_timezone_set('America/Fortaleza');
  

 
 // $stmt = $pdo->prepare("INSERT INTO comanda(produto,qtde,mesa) VALUES(:produto,:qtde,:mesa)");
//$stmt->bindValue(":produto",$pedido);
//  $stmt->bindValue(":qtde",$quantidade);
 // $stmt->bindValue(":mesa",$mesa);

  //$stmt->execute();
?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>estilo cupom fiscal</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>
<style>
.cupom{
	margin-left:-3em;
}
</style>
<body>

  <table class="printer-ticket cupom">
 	<thead>
		<tr>
			<th class="title" colspan="3">Club da Pizza</th>
		</tr>
	
		<tr>
			<th colspan="3">
				Nome do cliente <br />
				000.000.000-00
			</th>
		</tr>
		<tr>
			<th class="ttu" colspan="3">
				<b>Cupom não fiscal</b>
			</th>
		</tr>
	</thead>
	<tbody>
		<tr class="top">
			<td colspan="3">Pedido</td>
		</tr>
		<tr>
			<td colspan="2"><?php echo $pedido;?></td>
			<td align="right"><?php echo $quantidadePizza?></td>
		</tr>
		<tr>
			<td colspan="3">Sabor</td>
		</tr>
		<tr>
			<td><?php echo $sabor;?></td>
		</tr>
	</tbody>
	<tfoot>
		<tr class="sup ttu p--0">
			<td colspan="3">
				<b>Bebidas</b>
			</td>
		</tr>
		<tr class="ttu">
			<td colspan="2"><?php echo $marca;?></td>
			<td align="right"><?php echo $quantidade;?></td>
		</tr>
		<tr class="sup ttu p--0">
			<td colspan="3">
				<b>sub total</b>
			</td>
		</tr>

		<tr class="ttu">
			<td colspan="2"><?php echo 'total da compra';?></td>
			
		</tr>
	</tfoot>
</table>
  
  

</body>

</html>
