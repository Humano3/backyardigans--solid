//Código Solid para la letra S

<?php

// Clase User: responsable de almacenar la información del usuario
class User
{
    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}

// Clase UserRepository: responsable de la persistencia de los datos del usuario
class UserRepository
{
    public function save(User $user)
    {
        // Código para guardar el usuario en la base de datos
    }
}

// Clase EmailService: responsable de enviar notificaciones por correo electrónico
class EmailService
{
    public function sendEmailNotification(User $user, $message)
    {
        // Código para enviar un correo electrónico al usuario
        $email = $user->getEmail();
        // Aquí iría el código para enviar el email
        echo "Enviando email a $email: $message";
    }
}

// Uso de las clases refactorizadas
$user = new User("example@example.com");

$userRepository = new UserRepository();
$userRepository->save($user);

$emailService = new EmailService();
$emailService.sendEmailNotification($user, "Welcome to our service!");

?>


Codigo de Solid D

// Definición de la interfaz NotificationService
interface NotificationService {
    public function notify($message);
}

// Implementación concreta de la interfaz NotificationService para enviar notificaciones por correo electrónico
class EmailNotification implements NotificationService {
    public function notify($message) {
        echo "Notificación por correo electrónico: $message\n";
    }
}

// Implementación concreta de la interfaz NotificationService para enviar notificaciones por SMS
class SMSNotification implements NotificationService {
    public function notify($message) {
        echo "Notificación por SMS: $message\n";
    }
}

// Clase User que depende de la interfaz NotificationService
class User {
    private $notificationService;

    public function __construct(NotificationService $notificationService) {
        $this->notificationService = $notificationService;
    }

    public function performAction() {
        // Lógica para realizar alguna acción
        
        // Notificación utilizando la dependencia inyectada
        $this->notificationService->notify("¡Hola! Esto es una notificación.");
    }
}

// Uso de las clases
$emailNotification = new EmailNotification();
$userWithEmailNotification = new User($emailNotification);
$userWithEmailNotification->performAction();

$smsNotification = new SMSNotification();
$userWithSMSNotification = new User($smsNotification);
$userWithSMSNotification->performAction();


///Letra I
<?php

// Interfaces específicas siguiendo el principio de segregación de interfaces
interface Workable {
    public function work();
}

interface Eatable {
    public function eat();
}

interface Sleepable {
    public function sleep();
}

// Implementación de un trabajador humano que necesita todas las interfaces
class HumanWorker implements Workable, Eatable, Sleepable {
    public function work() {
        echo "Human working...\n";
    }

    public function eat() {
        echo "Human eating...\n";
    }

    public function sleep() {
        echo "Human sleeping...\n";
    }
}

// Implementación de un trabajador robot que solo necesita la interfaz Workable
class RobotWorker implements Workable {
    public function work() {
        echo "Robot working...\n";
    }
}

// Ejecución de ejemplos
$human = new HumanWorker();
$human->work();
$human->eat();
$human->sleep();

$robot = new RobotWorker();
$robot->work();








/Letar L

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
