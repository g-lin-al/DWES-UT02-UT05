<?php
    $titulo = "Mejores clientes";
    include 'header.php';
    include 'nav.php';
?>

    <main>
        <table id="tabla_clientes">
            <thead>
                <th>Cliente</th>
                <th>Gasto</th>
                <th>Pedidos</th>
                <th>Media</th>
            </thead>
            <tbody>
                <!-- Tabla generada a través de las consultas de clientes -->
                <!-- Iteras una lista de usuarios, se compara el nombre, y se le suman el número de pedidos y también el total de gasto (arrays bidimensionales) -->
            </tbody>
        </table>
    </main>

<?php
    include 'footer.php';
?>