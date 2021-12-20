<!-- incluir la importancion de el archivo public -->
<?php
require_once('../components/public_head.php');
require_once('../components/public_top_menu.php');
require_once('../modelos/proyectos.php');
?>
<!-- Inicio de portafolio -->

    <div class="item_portafolio col_2_1">
            <div>
                <img  class="imagen_portafolio" src="<?= APP_URL?>assets/img/wall1.jpg" alt="">
        </div>
            <div class="descripcion_proyecto">
                <div>
                    <h1>Titulo del Proyecto</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus itaque voluptate maiores illo dignissimos molestiae cum nulla, iusto earum perferendis, dicta sint numquam eum sequi assumenda veniam aut accusamus! Quidem.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="item_portafolio col_1_2 bg_negro">  
        <div class="descripcion_proyecto">
            <div>
                <h1>Titulo del Proyecto</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus itaque voluptate maiores illo dignissimos molestiae cum nulla, iusto earum perferendis, dicta sint numquam eum sequi assumenda veniam aut accusamus! Quidem.
                </p>
            </div>
        </div>
        <div>
            <img  class="imagen_portafolio" src="<?= APP_URL?>assets/img/wall1.jpg" alt="">
        </div>  
    </div>

    <div class="item_portafolio col_2_1">
        <div>
            <img  class="imagen_portafolio" src="<?= APP_URL?>assets/img/wall1.jpg" alt="">
        </div>
        <div class="descripcion_proyecto">
            <div>
                <h1>Titulo del Proyecto</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus itaque voluptate maiores illo dignissimos molestiae cum nulla, iusto earum perferendis, dicta sint numquam eum sequi assumenda veniam aut accusamus! Quidem.
                </p>
            </div>

        </div>
    </div>

<!-- Fin de portafolio -->

<?php

require_once('../components/public_footer.php');

?>
