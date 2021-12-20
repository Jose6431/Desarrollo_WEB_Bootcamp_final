<!-- incluir la importancion de el archivo public -->
<?php
session_start();
require_once('../components/adm_head.php');
require_once('../components/adm_top_menu.php');
require_once('../components/adm_left_menu.php');

// Para listas la tabla 
require_once('../modelos/articulo.php');

if(!isset($_SESSION['usu_id'])){
header('Location: '.APP_URL.'app/login.php');
}

$articulo = new Articulo();
$lista_articulos = $articulo->get_all();
?>
<!-- CONTENIDO PRINCIPAL  -->

<div class="contenedor_principal">
    <div>
           <h1>Listado de articulos</h1>
           <table>
               <tr>
                   <th>ID</th>
                   <th>TITULO DEL ARTICULO</th>
                   <th>OPERACIONES</th>
               </tr>
               <?php foreach($lista_articulos as $item):?>
               <tr>
                   <td><?=$item['art_id'] ?></td>
                   <td><?=$item['art_titulo'] ?></td>
                   <td>OPERACIONES</td>
               </tr>
               <?php endforeach;?>
           </table> 
           
     </div>
</div>
       

<!-- FIN DE CONTENIDO PRINCIPAL -->

<?php

require_once('../components/adm_footer.php');

?>