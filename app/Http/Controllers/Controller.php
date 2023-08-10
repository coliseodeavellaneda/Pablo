<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public $datos =
            [
                'title' => 'Soccer',
                'nosotros' => 'El Club',
                'membership' => 'Forma Parte',
                'contacto' => 'Contacto',
                'Ingresar' => 'Ingresar',
                'maintitle1' => 'Soccer club',
                'text1' => 'En Soccer club alquilamos canchas de futbol 5 de pasto natural.',
                'text2' => 'Contamos con tres canchas en este momento.',
                'text3' => 'Soccer club es una asociacion con fines de lucro.',
                'welcome' => 'Bienvenido',
                'maintitle2' => 'Canchas seguras',
                'text4' => 'Contamos con vestuarios y un amplio estacionamiento.',
                'maintitle3' => 'Seguridad',
                'text5' => 'Tenemos alambrados en el contorno y redes suspendidas en modo de techo .',
                'maintitle4' => 'Bufet',
                'text6' => 'Contamos con un bufet con alimentos y bebidas.',
                'maintitle5' => 'Seguridad',
                'text7' => 'Cumplimos con toda la normativa vigente en el marco de la Ley de
        alquiler de espacios deportivos.',
                'subtitle' => 'Convertite en parte de nuestros aficionados',
                'text8' => 'Al ser miembro de Soccer club recibes informacion y promociones.',
                'contactaClub' => 'Contactá a Soccer club',
                'registro' => 'Registro de Soccer club',
                'membresiaClub' => 'Membresía a Soccer club',
                'titleText' => 'Te Contactamos',
                'text9' => 'Para contactarte con Soccer club solo debes completar el
        formulario de contacto, Soccer club te dará toda la información necesaria para ser miembro.',
                'contactanos' => 'Contactanos',
                'consulta' => 'Hacenos tu consulta.',
                'nombre' => 'Nombre *',
                'mail' => 'Email *',
                'asunto' => 'Asunto *',
                'mensaje' => 'Mensaje *',
                'enviar' => 'Enviar',
                'titulo' => 'Soccer club',
                'numTelWeb' => '+54 9 11 4440 7442',
                'emailWeb' => 'soccerclub@gmail.com',
                'copyright' => '2023 Soccer club. Todos los derechos reservados.',
                'content1' => 'content1',
                'content2' => 'content2',
                'content3' => 'content3',
                'siteName' => 'siteName',
                'twitterSite' => 'twitterSite',
                'twitterTitle' => 'twitterTitle',
                'twitterDescription' => 'twitterDescription',
                'numTel' => '91144407442',
                'instagramURL' => 'dir instagram ...',
                'reservar cancha' => 'reservar cancha',
            ];

}
