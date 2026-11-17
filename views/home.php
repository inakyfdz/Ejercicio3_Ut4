


    <p><?= sanitary($parrafo1) ?></p>
    <div>
        <a href="/loggin.php"><button>Enviar al loggin</button></a>
        <?php if(isLoggedIn()){
            echo '<a href="/dashboard.php"><button>Enviar al loggin</button></a>';
        } ?>
    </div>

