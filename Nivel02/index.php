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
        private $recurso;

        public function __construct(string $name, Tema $tema, string $url, Tema $recurso)
        {
            $this -> name = $name;
            $this -> tema = $tema;
            $this -> url = $url;
            $this -> recurso = $recurso;
        }

        public function __toString() : string
        {
            return "";
        }



    }











?>