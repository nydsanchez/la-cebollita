<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $presentacion = $_POST['presentacion'];
    $picante = $_POST['picante'];
    $direccion = $_POST['direccion'];

    $to = "tuemail@ejemplo.com";
    $subject = "Nuevo Pedido de La Cebollita";
    $message = "Nombre: $nombre\nTeléfono: $telefono\nTamaño: $presentacion\nPicante: $picante\nDirección: $direccion";
    $headers = "From: pedidos@tusitio.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Pedido enviado con éxito.";
    } else {
        echo "Hubo un problema al enviar el pedido.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
