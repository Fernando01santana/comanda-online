<?php
//include '../PDO/conexao.php';

  $pedido = $_POST['pizza'];
  $quantidade = $_POST['quantidade'];
  $bebida = $_POST['marca'];
  $tamanho = $_POST['tamanho']; 		
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
			<td colspan="3">Doce de brigadeiro</td>
		</tr>
		<tr>
			<td>R$7,99</td>
			<td>2.0</td>
			<td>R$15,98</td>
		</tr>
		<tr>
			<td colspan="3">Opcional Adicicional: grande</td>
		</tr>
		<tr>
			<td>R$0,33</td>
			<td>2.0</td>
			<td>R$0,66</td>
		</tr>
	</tbody>
	<tfoot>
		<tr class="sup ttu p--0">
			<td colspan="3">
				<b>Totais</b>
			</td>
		</tr>
		<tr class="ttu">
			<td colspan="2">Sub-total</td>
			<td align="right">R$43,60</td>
		</tr>
		<tr class="ttu">
			<td colspan="2">Taxa de serviço</td>
			<td align="right">R$4,60</td>
		</tr>
		<tr class="ttu">
			<td colspan="2">Desconto</td>
			<td align="right">5,00%</td>
		</tr>
		<tr class="ttu">
			<td colspan="2">Total</td>
			<td align="right">R$45,56</td>
		</tr>
		<tr class="ttu">
			<td colspan="2">data</td>
			<td align="right"><?php echo date('d/m/y');?></td>
		</tr>
	</tfoot>
</table>
  
  

</body>

</html>
