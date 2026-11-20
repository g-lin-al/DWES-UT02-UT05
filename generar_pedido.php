<?php
    $titulo = "Generar pedido";
    include 'header.php';
    include 'nav.php';
?>

    <main>
        <!-- Quedan DOS <form> -->
        <button>Comprobar ofertas</button><br>
        <!-- El primer form de la comprobación de ofertas -->
        <button>Finalizar pedido</button><br>
        <!-- El segundo form de finalizar pedido y generar factura (hacia otro fichero) -->
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
                <!-- include del modelo de datos del menú  -->
                <!-- CREAR factura -->
            </tbody>
        </table>
    </main>

<?php
    include 'footer.php';
?>