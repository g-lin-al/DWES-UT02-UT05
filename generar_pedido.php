<?php
    $titulo = "Generar pedido";
    include 'header.php';
    include 'nav.php';
?>

    <main>
        <button>Comprobar ofertas</button><br>
        <button>Finalizar pedido</button><br>
        <table id="tabla_pedido">
            <thead>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Alérgenos</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Ofertas</th>
            </thead>
            <tbody>
                <!-- Generación de tabla a partir de los datos de productos -->
            </tbody>
        </table>
    </main>

<?php
    include 'footer.php';
?>