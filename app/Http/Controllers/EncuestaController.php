<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EncuestaController extends Controller
{
    public function all()
    {
        $encuestas = Encuesta::all();
        return response(json_encode($encuestas), 200)->header('Content-type', 'text/plain');
    }

    public function promedio()
    {
        $avgFacebook = DB::table('encuestas')
            ->select(DB::raw("AVG(TIME_TO_SEC(tiempoFacebook)) AS Facebook"))
            ->get();

        $avgWhatsApp = DB::table('encuestas')
            ->select(DB::raw("AVG(TIME_TO_SEC(tiempoWhatsApp)) AS WhatsApp"))
            ->get();

        $avgTwitter = DB::table('encuestas')
            ->select(DB::raw("AVG(TIME_TO_SEC(tiempoTwitter)) AS Twitter"))
            ->get();

        $avgInstagram = DB::table('encuestas')
            ->select(DB::raw("AVG(TIME_TO_SEC(tiempoInstagram)) AS Instagram"))
            ->get();

        $avgTiktok = DB::table('encuestas')
            ->select(DB::raw("AVG(TIME_TO_SEC(tiempoTiktok)) AS Tiktok"))
            ->get();

        return response(json_encode([['nombre' => 'Facebook', 'tiempo' => $avgFacebook[0]->Facebook], ['nombre' => 'WhatsApp', 'tiempo' => $avgWhatsApp[0]->WhatsApp], ['nombre' => 'Twitter', 'tiempo' => $avgTwitter[0]->Twitter], ['nombre' => 'Instagram', 'tiempo' => $avgInstagram[0]->Instagram], ['nombre' => 'Tiktok', 'tiempo' => $avgTiktok[0]->Tiktok]]), 200)->header('Content-type', 'text/plain');
    }

    public function edad()
    {
        $tiempoFacebook = DB::table('encuestas')
            ->select(DB::raw("idrangosEdad, SEC_TO_TIME(SUM(TIME_TO_SEC(tiempoFacebook))) AS tiempoFB"))
            ->groupBy('idrangosEdad')
            ->orderByDesc('tiempoFB')
            ->limit(1)
            ->get();

        $tiempoWhatsApp = DB::table('encuestas')
            ->select(DB::raw("idrangosEdad, SEC_TO_TIME(SUM(TIME_TO_SEC(tiempoWhatsApp))) AS tiempoFB"))
            ->groupBy('idrangosEdad')
            ->orderByDesc('tiempoFB')
            ->limit(1)
            ->get();

        $tiempoTwitter = DB::table('encuestas')
            ->select(DB::raw("idrangosEdad, SEC_TO_TIME(SUM(TIME_TO_SEC(tiempoTwitter))) AS tiempoFB"))
            ->groupBy('idrangosEdad')
            ->orderByDesc('tiempoFB')
            ->limit(1)
            ->get();

        $tiempoInstagram = DB::table('encuestas')
            ->select(DB::raw("idrangosEdad, SEC_TO_TIME(SUM(TIME_TO_SEC(tiempoInstagram))) AS tiempoFB"))
            ->groupBy('idrangosEdad')
            ->orderByDesc('tiempoFB')
            ->limit(1)
            ->get();

        $tiempoTiktok = DB::table('encuestas')
            ->select(DB::raw("idrangosEdad, SEC_TO_TIME(SUM(TIME_TO_SEC(tiempoTiktok))) AS tiempoFB"))
            ->groupBy('idrangosEdad')
            ->orderByDesc('tiempoFB')
            ->limit(1)
            ->get();

        return response(json_encode([['nombre' => 'Facebook', 'rangoEdad' => $tiempoFacebook[0]->idrangosEdad], ['nombre' => 'WhatsApp', 'rangoEdad' => $tiempoWhatsApp[0]->idrangosEdad], ['nombre' => 'Twitter', 'rangoEdad' => $tiempoTwitter[0]->idrangosEdad], ['nombre' => 'Instagram', 'rangoEdad' => $tiempoInstagram[0]->idrangosEdad], ['nombre' => 'Tiktok', 'rangoEdad' => $tiempoTiktok[0]->idrangosEdad]]), 200)->header('Content-type', 'text/plain');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuestas['encuestas'] = Encuesta::orderBy('id', 'desc')->paginate(10);
        return view('encuestas.index', $encuestas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('encuestas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'emailParticipante' => 'required',
            'idrangosEdad' => 'required',
            'sexo' => 'required',
            'redSocialFavorita' => 'required',
            'tiempoFacebook' => 'required',
            'tiempoWhatsApp' => 'required',
            'tiempoTwitter' => 'required',
            'tiempoInstagram' => 'required',
            'tiempoTiktok' => 'required'
        ]);

        $encuesta = new Encuesta;

        $encuesta->emailParticipante = $request->emailParticipante;
        $encuesta->idrangosEdad = $request->idrangosEdad;
        $encuesta->sexo = $request->sexo;
        $encuesta->redSocialFavorita = $request->redSocialFavorita;
        $encuesta->tiempoFacebook = $request->tiempoFacebook;
        $encuesta->tiempoWhatsApp = $request->tiempoWhatsApp;
        $encuesta->tiempoTwitter = $request->tiempoTwitter;
        $encuesta->tiempoInstagram = $request->tiempoInstagram;
        $encuesta->tiempoTiktok = $request->tiempoTiktok;

        $encuesta->save();

        return redirect()->route('index')
            ->with('success', 'La encuesta se agrego correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function show(Encuesta $encuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(Encuesta $encuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encuesta $encuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encuesta $encuesta)
    {
        $encuesta->delete();
        return redirect()->route('index')
            ->with('success', 'La encuesta se eliminó correctamente.');
    }
}
