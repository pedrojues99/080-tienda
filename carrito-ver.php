<?php

require_once "_comprobar-sesion.php";

$productos=DAO::obtenerPorCliente(idCliente);

?>

<html>

<head>
	<meta charset="UTF-8">
</head>

<body>

<?php require "_info-sesion.php"; ?>

<h1>Tu carrito</h1>


<table border="1">
    <?php

    if ($rs){
    foreach ($rs as $fila) {
        $sql2 = "SELECT id, nombre, precio FROM producto WHERE id=? ORDER BY id";
        $select2 = $pdo->prepare($sql2);
        $select2->execute([$fila["producto_id"]]);
        $rs2 = $select2->fetch();
        ?>

        <tr>
            <td><a href='producto-detalle.php?id=<?=$fila["producto_id"]?>'><?=$rs2["nombre"]?></a></td>
            <td><?=$fila["unidades"] ?></td>
            <td><?=$rs2["precio"] ?></td>
        </tr>
    <?php }} ?>

</table>

<?php require "_info-sesion.php"; ?>

</body>
</html>