<?php
class Book {
    public string $name;
    public string $topic;
    public string $author;
    public float $price;

    public function __construct(string $name, string $author, string $topic, float $price)
    {
        $this->name = $name;
        $this->author = $author;
        $this->topic = $topic;
        $this->price = $price;
    }
};
# OBJETO PARA LOS LIBROS DE LA TABLA

class Product {
    public string $name;
    public float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
};
# OBJETO PARA LOS PRODUCTOS QUE SOLO TIENEN PRECIO Y NOMBRE

$pencil = new Product("Bolígrafo", 0.50);
$pen = new Product("Lapicero", 0.18);

$donQuijote = new Book('Don Quijote', 'Miguel de Carvantes Saavedra', 'Novela', 25.1);
$lifeIsADream = new Book('La Vida es un Sueño', 'Pedro Calderón de La Barca', 'Obra de teatro', 12.5);
$rhymesAndLegends = new Book('Rimas y Leyendas', 'Gustavo Adolfo Bécquer', 'Poesía y Prosa', 18.6);

$books = array($donQuijote, $lifeIsADream, $rhymesAndLegends);
?>