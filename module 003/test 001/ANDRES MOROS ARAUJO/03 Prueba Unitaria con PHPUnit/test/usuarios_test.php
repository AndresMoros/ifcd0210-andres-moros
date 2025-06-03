<?php
use PHPUnit\Framework\TestCase;
// require_once '../usuarios.php';

class usuarios_test extends TestCase {

    private $usuario;

    protected function setUp(): void {
        $this->usuario = new Usuario("Juan", 1234);
    }

    // Verificar que nombre es de tipo string y clave es de tipo int
    public function testTypeStringNombre() {
        $this->assertIsString($this->usuario->getNombre());
    }

    public function testTypeNumericClave() {
        $this->assertIsNumeric($this->usuario->getClave(), "Error, la clave no es numérica");
    }

    // Verificar si clave es un alfanumérico y no un número
    public function testTypeStringClave() {
        $this->usuario->setClave("madrid123");
        $this->assertIsString($this->usuario->getClave());
        $this->testTypeNumericClave();  // Verifica que la clave sigue siendo numérica, debe dar error
                                        // Este método es uno reutilizado (el anterior) 
    }

    // Verificar que getDatos devuelve un string 
    public function testGetDatos() {
        $this->assertIsString("Nombre: Juan, clave: 1234", $this->usuario->getDatos());
    }

    // Verficar que getNombre  da el nombre correcto
    public function testGetNombre() {
        $this->assertEquals("Juan", $this->usuario->getNombre());
    }

    // Verificar que el objeto tenga un clave definida
    public function testIssetClave() {
        $this->assertNotNull($this->usuario->getClave(), "Error, la clave no está definida");
    }
    
}

?>