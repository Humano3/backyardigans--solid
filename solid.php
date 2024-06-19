<?php

// Ejemplo de la letra L de SOLID en PHP

// Clase que representa un libro
class Libro {
    private $titulo;
    private $autor;
    private $contenido;

    public function __construct($titulo, $autor, $contenido) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->contenido = $contenido;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getContenido() {
        return $this->contenido;
    }
}

// Clase responsable de imprimir el contenido del libro
class ImpresorContenido {
    public function imprimir(Libro $libro) {
        echo "Título: " . $libro->getTitulo() . "\n";
        echo "Autor: " . $libro->getAutor() . "\n";
        echo "Contenido: " . $libro->getContenido() . "\n";
    }
}

// Uso
$libro = new Libro("La Odisea", "Homero", "Una de las obras maestras de la literatura antigua.");
$impresor = new ImpresorContenido();
$impresor->imprimir($libro);
