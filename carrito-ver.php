<?php

require_once "_comprobar-sesion.php";
require_once "_clases.php";
require_once "_dao.php";
$carrito=DAO::obtenerPorCliente($_SESSION["id"]); //O clienteId o id o idCliente

?>

<html>

<head>
	<meta charset="UTF-8">
    <title>carrito ver</title>
</head>
<!--
winze was here -->
<body>

<?php require "_info-sesion.php"; ?>

<h1>Tu carrito</h1>


<table border="1">
    <?php

    if ($carrito){
    foreach ($productos as $fila) {
        $producto=DAO::obtenerProducto($fila["producto_id"])
        ?>

        <tr>
            <td><a href='producto-detalle.php?id=<?=$producto["id"]?>'><?=$producto["nombre"]?></a></td>
            <td><?=$fila["unidades"] ?></td>
            <td><?=$producto["precio"] ?></td>
        </tr>
    <?php }} ?>

</table>

<?php require "_info-sesion.php"; ?>

</body>
</html>