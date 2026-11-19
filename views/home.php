


    <p><?= sanitary($parrafo1) ?></p>
    <div>
        <a href="/login.php"><button>Enviar al loggin</button></a>
        <?php if(isLoggedIn()){
            echo '<a href="/dashboard.php"><button>Enviar al dash</button></a>';
        } ?>
    </div>

