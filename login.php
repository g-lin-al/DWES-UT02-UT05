<?php
if (!isset($_COOKIE["user"]) || !isset($_COOKIE["pass"])){
    ?>
    <!-- Lo que se verá cuando el usuario no esté logeado en su perfil -->
    <form id="login">
        <input type="text" placeholder="Usuario" name="user" >
        <input type="password" placeholder="Contraseña" name="pass" >
        <input type="submit" value="Conectar">
    </form>
<?php } else if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])) {
    ?>
    <!-- A utilizar cuando el usuario haya iniciado sesión en su perfil, para poder cerrarla -->
    <div>
    <!-- imagen de avatar recogida de los datos de la cuenta -->
    <?php echo $usuario; ?>
    <button>Desconectar</button>
</div>
<?php }
?>