<div class="header">
        <div class="logo">
            <img class="menu_logo" src="<?=APP_URL?>assets/img/logo2.png" alt="logo de mi blog" width="250px">

        </div>
        <div>
            <ul class="top_menu">
                <li>
                    <a href="#">
                        <i class="fas fa-home"></i> Inicio
                    </a>
                </li>

            </ul>
        </div>


        <div>
            <a href="#" class="btn" id="btn_user">
                <i class="fas fa-envelope"></i> usuario: <?= $_SESSION['usu_nombres'] ?>
            </a>
            <div id="user_menu">
                <div class="lista_barra">
                    <ul>
                        <li><a href="#">Ver perfil</a></li>
                        <li><a href="#">Actualizar contraseña</a></li>
                        <li>
                            <form action="<? APP_URL?>app/autenticar.php" method="POST">
                                <input type="hidden" name="operacion" value="logout">
                                <button type="submit">Cerrar Session</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</div>