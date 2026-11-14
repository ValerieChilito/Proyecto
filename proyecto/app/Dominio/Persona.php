<?php
// Indica el inicio del código PHP.

// Identifica el espacio de nombres al que pertenece la clase.
// En este proyecto corresponde a la carpeta app/Dominio.
namespace App\Dominio;

// Define la clase Persona.
// Es la plantilla que utilizaremos para crear objetos persona.
class Persona
{
    // Atributo que almacena el nombre de cada persona.
    // private: solo se puede acceder directamente desde esta clase.
    // string: el valor debe ser de tipo texto.
    private string $nombre;

    // Constructor: se ejecuta automáticamente al crear un objeto con new.
    // Recibe el nombre inicial de la persona.
    public function __construct(string $nombre)
    {
        // Llama al método setNombre para validar y guardar el nombre.
        // $this representa el objeto que se está creando.
        $this->setNombre($nombre);
    }

    // Método público que permite consultar el nombre desde fuera de la clase.
    // : string indica que devuelve un texto.
    public function getNombre(): string
    {
        // Devuelve el nombre almacenado en este objeto.
        return $this->nombre;
    }

    // Método público que permite asignar o cambiar el nombre.
    // Recibe un texto en el parámetro $nombre.
    // : void indica que el método no devuelve un valor.
    public function setNombre(string $nombre): void
    {
        // trim elimina los espacios al inicio y al final del texto.
        // === compara tanto el valor como el tipo.
        // Si el resultado es un texto vacío, el nombre no es válido.
        if (trim($nombre) === '') {

            // Lanza una excepción con el mensaje "Nombre obligatorio".
            // Interrumpe el método antes de guardar el nombre inválido.
            // La barra \ indica que se utiliza una clase del espacio global.
            throw new \InvalidArgumentException('Nombre obligatorio');
        }

        // Guarda el nombre sin espacios al inicio ni al final.
        // $this->nombre es el atributo del objeto.
        // $nombre es el parámetro recibido por el método.
        $this->nombre = trim($nombre);
    }
}