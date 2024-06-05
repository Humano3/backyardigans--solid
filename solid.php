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
