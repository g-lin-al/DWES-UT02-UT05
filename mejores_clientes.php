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
            </tbody>
        </table>
    </main>

<?php
    include 'footer.php';
?>