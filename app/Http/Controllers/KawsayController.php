<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KawsayController extends Controller
{
    //
    public function index()
    {
        // URL de la API de datos.gov.co (esto es un ejemplo, actualiza la URL según la API real)
        $apiUrl = 'https://api.datos.gov.co/api/endpoint';

        // Configura los parámetros de la solicitud
        $params = [
            'api_key' => '4e1b92a6c2e25daf6d73d6e8d3619b4f
', // Reemplaza con tu clave de API
            'parametro' => 'Clima', // Configura los parámetros específicos de la API
        ];

        // Realiza la solicitud GET a la API
        $response = Http::get($apiUrl, $params);

        // Decodifica la respuesta JSON
        $data = $response->json();

        // Procesa y devuelve los datos en la vista
        return view('kawsay', ['data' => $data]);
    }    
}
