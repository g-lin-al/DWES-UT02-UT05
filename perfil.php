<?php
    $titulo = "Perfil";
    include 'header.php';
    include 'nav.php';
?>

    <main>
        <section id="datos_cuenta">
            <h2>Datos de cuenta</h2>
            <label for="usuario">Nombre de usuario</label>
            <input type="text" id="usuario" value="<?php echo $_COOKIE["user"]?>" > <br>
            <label for="contrasenia">Contraseña</label>
            <input type="password" id="contrasenia" >
        </section>

        <section id="datos_personales">
            <h2>Datos personales</h2>
            <!-- rellenar con los datos de la cookie del usuario conectado en el value de los inputs (revisar cuando se implemente del todo) -->
            <label for="nombre_pers">Nombre completo</label>
            <input type="text" id="nombre_pers" value="<?php echo $_COOKIE["nombre"]?>" ><br>
            <label for="pais_pers">País</label>
            <input type="text" id="pais_pers" value="<?php echo $_COOKIE["pais"]?>" ><br>
            <label for="tlf_pers">Teléfono</label>
            <input type="text" id="tlf_pers" value="<?php echo $_COOKIE["tlf"]?>" ><br>
            <label for="email_pers">Correo</label>
            <input type="email" id="email_pers" value="<?php echo $_COOKIE["email"]?>" ><br>
        </section>

        <section id="datos_avatar">
            <h2>Avatar</h2>
            <input type="radio" name="avatar" id="pic_1" >
            <!-- aquí imagen -->
            <?php
            // Recoger los datos de usuario y hacer un loop entre todas las imágenes cargadas del mismo, imprimiéndolas dentro de un input para seleccionar la deseada
            ?>
            <!-- selector de archivo -->
            <form>
                <label for="avatar">Carga una imagen de perfil</label>
                <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" />
            </form>
        </section>
    </main>

<?php
    include 'footer.php';
?>