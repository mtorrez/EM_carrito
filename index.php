<?php 
session_start();

if (isset($_POST) &&  $_POST['producto'] != ""){
	$registro = array();
	$registro['producto'] = $_POST['producto'];
	$registro['costo']    = $_POST['costo'];
	$registro['cantidad'] = $_POST['cantidad'];
	$_SESSION['carrito'][] = $registro;
	$_POST['producto'] = '';
}
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carrito</title>
</head>
<body>

	<h1>Carrito de compras</h1>
	<form action="" method="post">
		Producto: <input type="text" name="producto" value="">
		<br>
		Costo: <input type="text" name="costo" value="0">
		<br>
		Cantidad: <input type="text" name="cantidad" value="0">
		<br>
		<input type="submit">
	</form>

 <p></p>
 <table>
 	<tr>
 		<th>No</th>
 		<th>Producto</th>
 		<th>Costo</th>
 		<th>Cantidad</th>
 		<th>Total</th>
 	</tr>
 	<?php if (isset($_SESSION['carrito'])) : ?>
 	<?php foreach ($_SESSION['carrito'] as $item) : ?>
 	<?php $conta = 0; ?>
 	<tr>
 		<td><?php echo ++$conta; ?></td>
 		<td><?php echo $item['producto']; ?></td>
 		<td><?php echo $item['costo']; ?></td>
 		<td><?php echo $item['cantidad']; ?></td>
 		<td><?php echo $item['costo'] * $item['cantidad']; ?></td>
 	</tr>
 	<?php endforeach; ?>
 	<?php endif; ?>
 </table>
	
</body>
</html>