    
<?php
    require_once('modelo.php');

    //modelo categoria 
    class Categoria extends Modelo {
        private $id;
        private $nombre_tabla;
    
        //creamos nuestro contructor
        //description: conecta a la BD
        //y define las 2 variables 

            public function __construct(){
                parent::__construct();//conexion a la BD
                $this->id='cat_id';
                $this->nombre_tabla='categoria';

            }
        
          //Obtener todos los registros de la tabla catagoria  
            public function get_all(){
            $consulta = "SELECT * FROM $this->nombre_tabla";
            $resultado = $this->db->query($consulta);//realizando la consulta 
            if(!$resultado){ //si es false
                echo "error al listar los datos de la tabla";
            }else{
                return $resultado->fetch_all(MYSQLI_ASSOC);
                //arrays asociativo MYSQLI_ASSOC
                //devolver como objeto, array simple o array asociativo
                $resultado->close();//cerramos la coneccion a la BD
                $this->db->close();

                  }
            }

         //obtener 1 registro de la tabla categoria


        public function get($id){
            $consulta = "SELECT * FROM $this->nombre_tabla where $this->id= " .$id;
            $resultado = $this->db->query($consulta);
            if(!$resultado){ //si es false
                echo "error al obtener el elemento con ID";
            }else{
                return $resultado->fetch_assoc();
                //arrays asociativo: una dupla o un registro
                //devolver como objeto, array simple o array asociativo
                $resultado->close();//cerramos la coneccion a la BD
                $this->db->close();

            }
        }

             //Guardar 1 registro en BD
           // $data['cat_nombre']="ALGORITMOS"//input

             public function store($data){
                $consulta = "INSERT INTO $this->nombre_tabla (cat_nombre) values ('".$data['cat_nombre']."'); ";
                $resultado = $this->db->query($consulta);
                if(!$resultado){ //si es false
                    echo "error al registrar datos";
                }else{
                    return $resultado;
                    //arrays asociativo: una dupla o un registro
                    //devolver como objeto, array simple o array asociativo
                    $resultado->close();//cerramos la coneccion a la BD
                    $this->db->close();
    
                }
            }

            //ACTUALIZAR registro en BD
            // $data['cat_nombre']="ALGORITMOS"//input

            public function update($id, $data){
                $consulta = "UPDATE $this->nombre_tabla SET cat_nombre = '".$data['cat_nombre']."' WHERE $this->id= " .$id;
                $resultado = $this->db->query($consulta);
                if(!$resultado){ //si es false
                    echo "error al actualizar datos ";
                }else{
                    return $resultado;
                    $resultado->close();//cerramos la coneccion a la BD
                    $this->db->close();
    
                }
            }

            //para borrar o eliminar datos


            public function delete($id){
                $consulta = "DELETE FROM $this->nombre_tabla WHERE $this->id = " .$id;
                $resultado = $this->db->query($consulta);//realizado la consulta a la BD
                if(!$resultado){ //si es false
                    echo "error al eliminar datos";
                }else{
                    return $resultado;
                    //arrays asociativo: una dupla o un registro
                    //devolver como objeto, array simple o array asociativo
                    $resultado->close();//cerramos la coneccion a la BD
                    $this->db->close();
    
                }
            }



    }


?>
