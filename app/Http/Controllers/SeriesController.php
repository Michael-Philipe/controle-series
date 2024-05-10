<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        // $series = DB::select('select nome from series');
        $series = Serie::query()->orderBy('nome')->get();
        $mensagemSucesso = session('mensagem.sucesso');
        $request->session()->forget('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);

    }

    public function create(Request $request)
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        Serie::create($request->all());

        $request->session()->put('mensagem.sucesso', 'Série adicionada com sucesso');

        return to_route('series.index');

    }

    public function destroy(Request $request)
    {

        Serie::destroy($request->series);

        $request->session()->put('mensagem.sucesso', 'Série removida com sucesso');

        return to_route('series.index');

    }
}
