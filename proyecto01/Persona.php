<?php

class Persona {
    private $posibles_generos = ['m', 'f'];
    private $posibles_nombres_m = ['Antonio', 'José', 'Francisco', 'Juan', 'Manuel', 'Pedro', 'Jesús', 'Miguel', 'Javier', 'David'];
    private $posibles_nombres_f = ['Daniela', 'Jhulieth','Alexandra', 'Susana', 'Anastasia', 'Diana', 'Estefania', 'Yadira'];
    private $posibles_apellidos = ['Pasuy', 'Garrido', 'Osorio', 'Sanchez', 'Calderon', 'Yepez', 'Foyain', 'Jervis'];

    public $persona;
    public $nombres;
    public $apellidos;
    public $genero;

    public function __construct($nombre = null){
        echo sprintf('Pasando el nombre %s dentro del contructor.. <br>',$nombre);
    }

    //Metodo para crear una persona aleatoria

    public function crear_persona(){
        $this->genero = $this->posibles_generos[rand(0, 1)];
        $this->nombres = $this->obtener_nombre();
        $this->apellidos = $this->obtener_apellido().' '.$this->obtener_apellido();
        $this->persona = $this->nombres.' '.$this->apellidos;
        return $this->persona;
    }

    //Metodo para seleccionar un metodo nombre
    private function obtener_nombre(){
        if ($this->genero ==='m') {
            return $this->posibles_nombres_m[rand(0, count($this->posibles_nombres_m) -1)];
        }elseif ($this->genero ==='f') {
            return $this->posibles_nombres_f[rand(0, count($this->posibles_nombres_f) -1)];
        }
    }

    //Metodo para seleccionar un metodo apellido
    private function obtener_apellido(){
        return $this->posibles_apellidos[rand(0, count($this->posibles_apellidos) -1)];
    }

    //Metodo estatico para crear una persona

    public static function crear(){
        $persona = new self();
        return $persona->crear_persona();
    }

}