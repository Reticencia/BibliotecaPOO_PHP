<?php

class Libro{
    /*Esta es una vercion mas antigua
    Esta no necesariamente esta mal, solo es mas manual



    //Propiedades
    public $titulo;
    public $autor;
    public $disponible;

    //Constructor
    public function __construct($titulo,$autor,$disponible = true){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponnible = $disponible;

    }*/

    //Esta es una vercion mucho mas moderna
    /*
    Esta es mas moderna, y con este crear las propiedades el constructor
    Asigna los valores y aplica valores por defecto
    */
    public function __construct(
        public string $titulo,
        public string $autor,
        public bool $disponible = true
    ){}

    public function prestar():void{
        $this->disponible = false;
    }

    public function devolver():void{
        $this->disponible = true;
    }
    
    public function estaDisponible(): bool {
        return $this->disponible;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }
}

?>