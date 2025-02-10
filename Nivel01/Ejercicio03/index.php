<?php
    class MiClase {
        private string $nombre = "Monica";

        public function __get($propiedad) : string {
            return $this->$propiedad;
        }
    }

    $obj = new MiClase();
    echo $obj->nombre; 

?>