<?php

namespace Controllers;

use MVC\Router;
use Model\Vendedor;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController
{
    public static function index(Router $router)
    {

        $propiedades = Propiedad::get(3);
        $inicio = true;

        $router->render('paginas/index', [
            'propiedades' => $propiedades,
            'inicio' => $inicio
        ]);
    }
    public static function nosotros(Router $router)
    {

        $router->render('paginas/nosotros');
    }
    public static function propiedades(Router $router)
    {
        $propiedades = Propiedad::all();
        $inicio = false;
        $router->render('paginas/propiedades', [
            'propiedades' => $propiedades,
            'inicio' => $inicio
        ]);
    }
    public static function propiedad(Router $router)
    {
        $id = validarORedireccionar('/propiedades');

        // Buscar la prpoiedad por su id
        $propiedad = Propiedad::find($id);
        $inicio = false;

        $router->render('paginas/propiedad', [
            'propiedad' => $propiedad,
            'inicio' => $inicio
        ]);
    }
    public static function blog(Router $router)
    {
        $id = validarORedireccionar('/propiedad');
        $propiedad = Propiedad::find($id);
        $vendedor = Vendedor::find($id);
        $inicio = false;

        $router->render('paginas/blog', [
            'propiedad' => $propiedad,
            'vendedor' => $vendedor,
            'inicio' => $inicio
        ]);
    }
    public static function entrada(Router $router)
    {
        $id = validarORedireccionar('/propiedad');
        $propiedad = Propiedad::find($id);
        $vendedor = Vendedor::find($id);
        $inicio = false;

        $router->render('paginas/entrada', [
            'propiedad' => $propiedad,
            'inicio' => $inicio
        ]);
    }
    public static function contacto(Router $router)
    {
        $mensaje = null;

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $respuestas = $_POST['contacto'];

            // Crear php mailer
            $mail = new PHPMailer();

            // Configurar SMTP
            $mail->isSMTP();
            $mail->Host = "smtp.mailtrap.io";
            $mail->SMTPAuth = true;
            $mail->Username = "ae864513d18861";
            $mail->Password = "c504b64dae341b";
            $mail->SMTPSecure = "tls";
            $mail->Port = 2525;

            // Configurar el contenido del mail
            $mail->setFrom('admin@bienesraices.com');
            $mail->addAddress('admin@bienesraices.com', 'BienesRaices.com');
            $mail->Subject = 'Tienes un nuevo mensaje';

            // Habilitar HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            // Definir el contenido
            $contenido = "<html>";
            $contenido .= "<p>Tienes un nuevo mensaje</p>";
            $contenido .= "<p>Nombre: " . $respuestas['nombre'] . "</p>";

            // Enviar de forma dcondicional algunos campos de email o telefono
            if ($respuestas['contacto'] === 'telefono') {
                $contenido .= "<p>telefono: " . $respuestas['telefono'] . "</p>";
                $contenido .= "<p>fecha: " . $respuestas['fecha'] . "</p>";
                $contenido .= "<p>hora: " . $respuestas['hora'] . "</p>";
            } else {
                // Es email, entonces agregamos el campo de email
                $contenido .= "<p>email: " . $respuestas['email'] . "</p>";
            }

            $contenido .= "<p>Mensaje: " . $respuestas['mensaje'] . "</p>";
            $contenido .= "<p>tipo: " . $respuestas['tipo'] . "</p>";
            $contenido .= "<p>presupuesto: $" . $respuestas['precio'] . "</p>";
            $contenido .= "<p>contacto: por " . $respuestas['contacto'] . "</p>";

            $contenido .= "</html>";
            $mail->Body = $contenido;
            $mail->AltBody = "Contenido alternativo";

            // Enviar el mail
            if ($mail->send()) {
                $mensaje = "Mensaje enviado correctamente";
            } else {
                $mensaje = "Mensaje no enviado correctamente";
            }
        }
        $router->render('paginas/contacto', [$mensaje]);
    }
}
