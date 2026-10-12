<?php
    $titulo = "Perfil";
    include 'header.php';
    include 'nav.php';
?>

    <main>
        <section id="datos_cuenta">
            <h2>Datos de cuenta</h2>
            <label for="usuario">Nombre de usuario</label>
            <input type="text" id="usuario" > <br>
            <label for="contrasenia">Contraseña</label>
            <input type="password" id="contrasenia" >
        </section>

        <section id="datos_personales">
            <h2>Datos personales</h2>
            <label for="nombre_pers">Nombre completo</label>
            <input type="text" id="nombre_pers" ><br>
            <label for="pais_pers">País</label>
            <input type="text" id="pais_pers" ><br>
            <label for="tlf_pers">Teléfono</label>
            <input type="text" id="tlf_pers" ><br>
            <label for="email_pers">Correo</label>
            <input type="email" id="email_pers" ><br>
        </section>

        <section id="datos_avatar">
            <h2>Avatar</h2>
            <input type="radio" name="avatar" id="pic_1" >
            <!-- aquí imagen -->
            <!-- selector de archivo -->
        </section>
    </main>

<?php
    include 'footer.php';
?>