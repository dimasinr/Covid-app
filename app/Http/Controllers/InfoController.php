<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InfoController extends Controller
{
    public function infoIndonesia()
    {
        $response = Http::post('https://api.kawalcorona.com/indonesia');
        $dataIndonesia = $response->json();

        $response = Http::post('https://api.kawalcorona.com/indonesia/provinsi');
        $provinsi = $response->json();

        $response = Http::post('https://api.kawalcorona.com/positif');
        $worldata = $response->json();

        $response = Http::post('https://api.kawalcorona.com/');
        $global = $response->json();

        return view('home' , compact(['dataIndonesia','worldata','provinsi','global']));

    }

    public function infoWilayah()
    {
        $response = Http::post('https://api.kawalcorona.com/indonesia/provinsi');
        $dataWilayah = $response->json();

        $response = Http::post('https://api.kawalcorona.com/indonesia/');
        $data = $response->json();

        return view('provinsi' , compact(['dataWilayah','data']));
    }

    public function infoGlobal()
    {
        $response = Http::post('https://api.kawalcorona.com/');
        $dataGlobal = $response->json();

        $response = Http::post('https://api.kawalcorona.com/positif');
        $positif = $response->json();

        $response = Http::post('https://api.kawalcorona.com/sembuh');
        $sembuh = $response->json();

        $response = Http::post('https://api.kawalcorona.com/meninggal');
        $meninggal = $response->json();

        return view('global' , compact(['dataGlobal','positif','sembuh','meninggal']));
    }
}
