<?php
// Ejercicio 1.
// • Clase:
//      o Crea la clase Amigos con los siguientes atributos o propiedades públicas:
//          ▪ nombre, apellidos, dirección y teléfono.
//      o Incluye también un método constructor para inicializar las propiedades al crear cada objeto.
//      o La clase no tendrá otros métodos.
//      o Guarda la clase en un archivo con el nombre Amigos.php.
// • Objetos:
//      o Crea 3 amigos (objetos) distintos a partir de la clase Amigos.
//      o Guarda estos objetos en el archivo con el nombre objetos2.php.
//      o Mostrar por pantalla los datos de todas las instancias usando un bucle foreach.

class Friends {
    public $nombre;
    public $apellido;
    public $direccion;
    public $telefono;
    public function __construct(string $nombre, string $apellido, string $dir, int $tel)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $dir;
        $this->telefono = $tel;
    }
}

?>