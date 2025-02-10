<?php

    enum Tema: string{
        case PHP = 'PHP';
        case CSS = 'CSS';
        case HTML = 'HTML';
        case SQL = 'SQL';
        case Laravel = 'Laravel';
    }

    enum TipoRecurso: string{
        case Archivo = 'Archivo';
        case Articulo = 'Articulo Web';
        case Video = 'Vídeo';
    }


    class RecursoDidactico{
        public string $name;
        private $tema;
        public string $url;
        private $tipoRecurso; 

        public function __construct(string $name, Tema $tema, string $url, TipoRecurso $tipoRecurso)
        {
            $this -> name = $name;
            $this -> tema = $tema;
            $this -> url = $url;
            $this -> tipoRecurso = $tipoRecurso; 
        }

        public function __toString() : string
        {
            return "El recurso didáctico es: {$this->name} 
                    Actualmente esta en el tema: {$this->tema->value} 
                    La URL es: {$this->url} 
                    Y el Tipo de recurso es: {$this->tipoRecurso->value}";
        }
    }

    // nuevo objeto:
    $recurso = new RecursoDidactico('PHP Avanzado', Tema::CSS, 'www.php.ed', TipoRecurso::Video);

    echo $recurso . PHP_EOL; 

?>