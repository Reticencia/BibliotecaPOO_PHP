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
            return null;
        }
    }

}
?>