<?php
class Biblioteca{

    public function __construct(
        public $Libros = []
    ){}
    
    public function agregarLibro($libro){
        $this->Libros[] = $libro;
    }       

    public function buscarLibro(string $titulo){
        foreach($this->Libros as $libros){
            if($libros->titulo === $titulo){
                return $libros;
            }

        }
        return null;
    }

    public function listarLibrosDisponibles(): array {
        return array_filter($this->Libros, fn($libro) => $libro->estaDisponible());
    }

    public function prestarLIbro(string $titulo){
        $libro = $this->buscarLibro($titulo);

        if($libro && $libro->estaDisponible()){
            $libro->prestar();
            return true;
        }
        return false;
    }
}
?>