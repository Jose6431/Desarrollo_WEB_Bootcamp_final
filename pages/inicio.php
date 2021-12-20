<!-- incluir la importancion de el archivo public -->
<?php
require_once('../components/public_head.php');
require_once('../components/public_top_menu.php');
?>
<!-- Inicio de pagina principal -->

<div class="banner">
        <div>
            <h1>
                Web designer
            </h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo atque error delectus natus obcaecati, molestias repudiandae deleniti labore eaque ipsa voluptates voluptas accusantium vitae earum alias aliquid excepturi dolores provident.
            </p>
        </div>
        <div>

        </div>
        <div>
            <h1 class="heading_developer">
                &lt; Web designer &gt;
            </h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo atque error delectus natus obcaecati, molestias repudiandae deleniti labore eaque ipsa voluptates voluptas accusantium vitae earum alias aliquid excepturi dolores provident.
            </p>
        </div>

    </div>

    <div class="contenedor_proyectos">
        <h1> 
            <i class="fas fa-hammer"></i>
            Mis Ultimos Trabajos 
        </h1>
        <div class="ultimos_trabajos">
            <div class="work_item">
                <img src="<?= APP_URL?>assets/img/img.jpg" alt="texto alternativo">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, iste vero voluptatum at cupiditate adipisci quae praesentium autem hic ad deserunt, quis omnis, soluta ipsam commodi necessitatibus corporis rem sunt?
                </p>
                <a class="btn btn_oscuro" href="">
                    <i class="fas fa-eye"></i>
                    Ver Proyecto
                </a>
            </div>

            <div class="work_item">
                <img src="<?= APP_URL?>assets/img/img.jpg" alt="texto alternativo">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, iste vero voluptatum at cupiditate adipisci quae praesentium autem hic ad deserunt, quis omnis, soluta ipsam commodi necessitatibus corporis rem sunt?
                </p>
                <a class="btn btn_oscuro" href="">
                    <i class="fas fa-eye"></i>
                    Ver Proyecto
                </a>
            </div>

            <div class="work_item">
                <img src="<?= APP_URL?>assets/img/img.jpg" alt="texto alternativo">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, iste vero voluptatum at cupiditate adipisci quae praesentium autem hic ad deserunt, quis omnis, soluta ipsam commodi necessitatibus corporis rem sunt?
                </p>
                <a class="btn btn_oscuro" href="">
                    <i class="fas fa-eye"></i>
                    Ver Proyecto
                </a>
            </div>

        </div>
    </div>   
</div>
<!-- Fin de pagina principal -->

<?php

require_once('../components/public_footer.php');

?>
