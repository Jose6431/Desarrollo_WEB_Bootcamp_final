<?php
require_once('../modelos/usuario.php');

if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $op = $_POST['operacion'];
    switch($op){
        case "login":
            $usuario = new Usuario();
            $usr = $_POST['usr'];
            $pwd = $_POST['pwd'];

            $item = $usuario->get_por_usuario($usr);

            if($item !== null){
                echo "El usuario existe";
                if(password_verify($pwd, $item['usu_password'])){
                    echo "AUTENTICADO CORRETAMENTE";
                    session_start();
                    $_SESSION['usu_id'] = $item['usu_id'];
                    $_SESSION['usu_nombres'] = $item['usu_nombres'];
                    $_SESSION['usu_primer_apellido'] = $item['usu_primer_apellido'];
                    header('Location: '.APP_URL.'app/listar_articulos.php');
                }else{
                    echo "El password no es correcto";
                }
            }else{
                echo "El usuario no existe";
            }
            break;
            case "logout":
                //destruir cookie en navegador
                if(init_get("session.use_cookies")){
                    $params = session_get_cookie_params();
                    setcookie(session_name(), '', time()-42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
                }
                session_destroy();//destruccion de la sesion en servidor
                header('Location: ' .APP_URL);

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