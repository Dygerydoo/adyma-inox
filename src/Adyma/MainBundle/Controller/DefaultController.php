<?php

namespace Adyma\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{


    /**
    * @Route("/contacto", name="contacto")
    * @Template()
    */
    public function contactForm(){

                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $email = $_POST['email'];
                $telefono = $_POST['telefono'];

                $header = 'From: ' . $email . " \r\n";
                $header .= "X-Mailer: PHP/" . phpversion() . " \r\n" . " \r\n";
                $header .= 'MIME-Version: 1.0' . "\r\n";
                $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                $mensaje = "Este mensaje fue enviado por " . "<b>" . $nombre . " " . $apellido . "</b>" . "<br>" . "<br>";

                $mensaje .= "Con teléfono de contacto " . "<b>" . $telefono . "</b>" . "<br>" . "<br>";

                $mensaje .= "Su e-mail es: " . $email . "<br>" . "<br>" . "<br>";

                $mensaje .= "Mensaje: " . "<br>" . $_POST['mensaje'] . "<br>" . "<br>" . "<br>";

                $mensaje .= "Enviado el " . date('d/m/Y', time());

                $para = 'contacto@adymainox.com';

                $asunto = "Solicitud de Presupuesto - " . $nombre . " " . $apellido . " \r\n";

                mail($para, $asunto, utf8_decode($mensaje), $header);

                echo '<script type="text/javascript">alert("Tu mensaje ha sido enviado. Te responderemos en breves.");</script>';
        }
}
