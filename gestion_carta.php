<?php
    $titulo = "Gestión de carta";
    include 'header.php';
    include 'nav.php';
?>

    <main>
        <button>Editar</button><br>
        <table id="tabla_gestion">
            <thead>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Alérgenos</th>
                <th>Cantidad</th>
            </thead>
            <tbody>
                <!-- Tabla generada -->
                <!-- los td de esta tabla son editables, generados inputs -->
                <!-- (hacer después de los otros) -->
            </tbody>
        </table>
    </main>

<?php
    include 'footer.php';
?>