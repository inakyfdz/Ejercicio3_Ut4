

<form method="post" >
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password">
    <br>
    <button type="submit"> Entrar / loggin</button>
</form>
<?php if($error) :  renderErrors($error); endif; ?>

<div>
    <a href="/index.php"><button>Volver al index</button></a>
</div>
