<?php
    //trait
    trait Turbo{
        public function boost(){
            echo "Se ha iniciado el turbo" . PHP_EOL;
        }
    }

    class Car{
        use Turbo;

        public string $marca;
        public string $matricula;
        public string $tipoCombustible;
        public string $velocidadMax;

        public function __construct(string $marca, string $matricula, string $tipoCombustible, string $VelocidadMax)
        {
            $this->marca = $marca;
            $this->matricula =$matricula;
            $this->tipoCombustible = $tipoCombustible;
            $this->velocidadMax = $VelocidadMax;
        }

        public function __toString():string
        {
            return "
                    Marca: {$this->marca}
                    Matricula: {$this->matricula}
                    Combustible: {$this->tipoCombustible}
                    Velocidad Máxima: {$this->velocidadMax}";
        }
    }

    //Nuevo Objeto
    $car01 = new Car('Citroen', 'ES123', 'Diesel', '100km/hr');

    // lo utilizo y el trait
    echo $car01 . PHP_EOL;
    $car01 -> boost();

?>