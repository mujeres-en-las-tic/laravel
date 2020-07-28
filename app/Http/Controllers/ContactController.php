<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function myTestMail()
    {
        // Este es el correo a donde llegara el mensaje
        $myEmail = 'your_receiver_email@gmail.com';

        // Estos datos los podemos utilizar en la vista
        $details = [
            'title' => 'Correo de prueba desde Laravel-doc.netlify.app',
            'url' => 'https://laravel-doc.netlify.app/1.0/laravel/'
        ];

        // Clase mail la cual envía el correo
        Mail::to($myEmail)->send(new MyTestMail($details));


        /* 
        Una vez enviado el correo, regresamos a la pagina inicio
        con un mensaje
        */
        return redirect('/')->with('status', 'Correo enviado');

        // Mostrar una vista previa del correo, en el navegador
        // return new \App\Mail\MyTestMail($details);
    }
}
