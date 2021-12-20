<?php
require_once ('../modelos/articulo.php');
    if($_SERVER ['REQUEST_METHOD'] == 'POST'){
        $op = $_POST['operacion'];

        switch($op){
            case "store":
                echo "<h1>ejecutando instrucciones de STORE</h1>";
                // $data['art_titulo'] = $_POST['art_articulo'];
                // $articulo = new Articulo();
               //trim('ABC') = trim permite eliminar espacios  

               //XX Cross Site Scripting
                $data['art_titulo'] = htmlspecialchars($_POST['art_titulo']);
                $data['art_resumen'] = htmlspecialchars($_POST['art_resumen']);
                $data['art_detalle'] = htmlspecialchars($_POST['art_detalle']);
                $data['art_foto'] = "foto_articulo.jpg";
                $data['usu_id'] = 1;
                $data['cat_id'] = 1;
                $articulo = new Articulo();
                $articulo->store($data);
                header("Location: ".APP_URL."app/listar_articulos.php");


                break;

            case "update":
                echo "<h1>ejecutando instrucciones de UPDATE</h1>";
                break;

            case "delete":
                echo "<h1>ejecutando instrucciones de DELETE</h1>";
                break;

            default:
              //  header("HTTP/1.0 404 Not Found");
               echo "No existe esta operacion";
        }
    }else{
       // header("HTTP/1.0 403 Forbidden");
        echo "Esta operacion no esta permitida";
    }
?> 