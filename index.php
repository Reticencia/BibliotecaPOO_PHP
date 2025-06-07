<?php
require __DIR__ . '/src/Libro.php';
require __DIR__ . '/src/Biblioteca.php';

// Crear instancias
$biblioteca = new Biblioteca();
$biblioteca->agregarLibro(new Libro("El Principito", "Antoine de Saint-Exupéry"));
$biblioteca->agregarLibro(new Libro("1984", "George Orwell"));

// Demostración
echo "=== LIBROS EN BIBLIOTECA ===\n";
foreach ($biblioteca->listarLibrosDisponibles() as $libro) {
    $estado = $libro->estaDisponible() ? "Disponible" : "Prestado";
    echo "- {$libro->getTitulo()} ({$estado})\n";
}

// Buscar un libro
$libro = $biblioteca->buscarLibro("1984");
if ($libro) {
    echo "\nLibro encontrado: {$libro->getTitulo()}";
} else {
    echo "\nLibro no encontrado";
}


?>
