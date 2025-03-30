<?php
// • Cursos.php.
// o Crea la clase Cursos extendida a partir de la clase Alumnos.
// o Esta clase, además, debe implementar la interfaz Complemento.
// o Propiedades privadas de la clase Cursos:
// ▪ cod_curso, nombre_curso, fecha_inicio y fecha_fin.
// o Para inicializar los objetos al crearse, incluye un método constructor.
// o Crea los métodos get necesarios para obtener los datos de cada
// propiedad: (getCodigoCurso(), getNombreCurso(), getFechaInicio() y
// getFechaFin()).
// o Crea distintos métodos set para, en caso de ser necesario, modificar los
// datos de las propiedades: (setCodigoCurso(), setNombreCurso(),
// setFechaInicio() y setFechaFin()).
// o Implementa el método mostrarDatos() de la interfaz Complemento
// dentro de la clase Cursos con la siguiente funcionalidad:
// ▪ Un bucle foreach para recorrer cada objeto y mostrar todos sus
// datos.
// ▪ Este bucle debe generar dinámicamente una tabla que mostrará
// en cada fila un par clave / valor (por ejemplo: dni / 01234567R).
// o Guarda la clase en el archivo Cursos.php dentro de la carpeta clases.

include_once("students.php");
include_once("interfaces/complement.php");

class Courses extends Students implements Complement
{
    public function __construct(
        protected string | int $course_code,
        protected string $course_name,
        protected string $init_date,
        protected string $finish_date,
        protected string | int $stud_code,
        protected string | int $phone,
        protected string $email,
        protected string $dni,
        protected string $name,
        protected string $last_name,
        protected int $age,
    ) {
        parent::__construct($stud_code, $phone, $email, $dni, $name, $last_name, $age);
    }

    // GET METHODS ⤵
    public function get_course_code()
    {
        return $this->course_code;
    }

    public function get_course_name()
    {
        return $this->course_name;
    }

    public function get_init_date()
    {
        return $this->init_date;
    }

    public function get_finish_date()
    {
        return $this->finish_date;
    }
    // SET METHODS ⤵

    public function set_course_code(string | int $new_course_code)
    {
        $this->course_code = $new_course_code;
        return;
    }

    public function set_course_name(string $new_course_name)
    {
        $this->course_name = $new_course_name;
        return;
    }

    public function set_init_date(string $new_date)
    {
        $this->init_date = $new_date;
        return;
    }

    public function set_finish_date(string $new_date)
    {
        $this->finish_date = $new_date;
        return;
    }

    // 
    public function showData()
    {
        echo "<table>";
        foreach ($this as $key => $value) {
            echo("
            <tr>
            <th>$key</th>
            <td>$value</td>
            </tr>
            ");
        }
        echo "</table>";
    }
}

$estudiante1 = new Courses(12312, "IFCD0210: Desarrollo de Aplicaciones con Tecnologías Web", "24-12-2024", "16-07-2025", 30441885, 65091231, "email@gmail.com", "Z1301290J", "Andrés", "Moros", 32);

$estudiante2 = new Courses("Y1230D_21", "IFCD0211: Publicación y Confección de Páginas Web", "21/03/2025", "21/08/2025", 11295913, "04120716772", "estudiante@gmail.com", "Z9812808T", "Gabriel", "Mejias", 21);
?>