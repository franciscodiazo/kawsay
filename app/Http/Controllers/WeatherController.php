<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Asegúrate de importar la clase Http


class WeatherController extends Controller
{
    //
    public function index()
    {
        // URL de la API de pronóstico del clima (por ejemplo, OpenWeatherMap)
        $apiUrl = 'https://api.openweathermap.org/data/2.5/weather';

        // Configura los parámetros de la solicitud
        $params = [
            'q' => 'Bogota', // Ciudad para la que deseas obtener el pronóstico
            'appid' => '4e1b92a6c2e25daf6d73d6e8d3619b4f', // Reemplaza con tu clave de API
            'units' => 'metric', // Unidades métricas para temperatura en grados Celsius
        ];

        // Realiza la solicitud GET a la API
        $response = Http::get($apiUrl, $params);

        // Decodifica la respuesta JSON
        $data = $response->json();

        // Procesa y devuelve los datos en la vista
        return view('weather', ['weather' => $data]);
    }
}
