<h1> hola desde admin</h1>
<div>
    <p>1. ¿Qué diferencia existe entre password_hash() y cifrar una contraseña?</p>
    <a>Cifrar una contraseña es bidireccional mientras que el Hash es unidireccional. Ademas normalmente
    cifrar una contraseña mediante un metodo matematico es menos seguro que el hash que utiliza diferentes "salts"
    o formas de cifrado.</a>

    <p>2. ¿Por qué debemos regenerar el identificador de sesión después del login?</p>
    <a>Para que no tengamos un problema de seguiminto de id y un atacante probando ID conocidas o que sepa la ID de
    una persona y se identifique con esa.</a>

    <p>3. ¿Qué información mínima necesita realmente la sesión para identificar al usuario?</p>
    <a> ID de usuario, su rol, email y nombre como forma "publica" que estara en el localStorage o una SessionStorage</a>
</div>
<br>
<br>
<a href="../public/index.php"> <button>Indice</button></a>
<br><br>
<a href="../public/logOut.php"> <button>Cerrar sesion</button></a>
