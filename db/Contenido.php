<?php

class Contenido {
    private $id;
    private $url;
    private $titulo;
    private $fecha_publicacion;
    private $texto;
    
    
    public function __construct($id, $url, $titulo, $fecha_publicacion, $texto) {
        $this->id = $id;
        $this->url = $url;
        $this->titulo = $titulo;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->texto = $texto;
    }
    
    
    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
       
    
    public function __toString() {
        return "ID: $this->$id, url: $this->$url, titulo: $this->$titulo, fecha_publicacion: $this->$fecha_publicacion, texto: $this->$texto";
    }
    
}
?>
