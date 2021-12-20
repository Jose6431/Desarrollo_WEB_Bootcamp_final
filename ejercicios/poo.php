<?php

abstract class Coche{
        private $marca;
        public $color;
        public static $modelo = 'Furgoneta';
    
        public function __construct($mar, $col){
            $this->marca = $mar;
            $this->color = $col;
        }

        public function set_marca($m){
            $this->marca = $m;

            
        }

        public function get_marca(){
            return $this->marca;
        }

        // public static function acelerar(){
        //     echo "<h3>Acelerando el coche</h3>";
        // } 

    }

        interface Acciones_coche{
            public function acelerar();
        }

        //trait permite utilizar el metodo heredado multiple
        trait bocinas_graves{
            public function grave1(){
                echo"<br> Tocando bocinas graves 1";
            }
        }

        trait bocinas_agudas{
            public function aguda1(){
                echo"<br> Tocando bocina aguda 1";
            }
        }


        class Todoterreno extends Coche implements Acciones_coche{
            use bocinas_agudas, bocinas_graves;
            
            private $traccion;

            public function __construct($mar, $col, $tra = '4x4'){
                parent::__construct($mar, $col);
                $this->traccion = $tra;
            }

            public function activa_doble_traccion(){
                echo "<br>Activando traccion".$this->traccion;
            }

            public function acelerar(){
                echo "<h3>acelerando el coche todo-terreno<h3>";
            }

   
        }


    echo "<h3>Instancia de la clase Todoterreno</h3>";
    // $a = new Coche('Toyota','Rojo');
    // echo $a->get_marca()."<br>";
    // echo $a->color."<br>";
    // echo Coche::$modelo."<br>";
    // Coche::acelerar();

   $b=new Todoterreno('Nissan','negro');
   $b->acelerar(); //metodo de interface
   $b->activa_doble_traccion(); //metodo de la clase todo terreno
    $b->aguda1();//metodo de los traits
    $b->grave1();//metodo de los traits


?>