<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EtecController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function sobreNos()
    {
        return view('site.sobrenos');
    }

    public function cursos()
    {
        return view('site.cursos');
    }

    public function contato()
    {
        return view('site.contato');
    }

    public function galeria()
    {
        return view('site.galeria');
    }

    public function enviarContato(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'min:2', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'assunto' => ['required', 'string', 'min:2', 'max:150'],
            'mensagem' => ['required', 'string', 'min:5', 'max:2000'],
        ]);

        Log::info('Contato - Etec Zona Leste', $dados);

        return redirect()
            ->route('site.contato')
            ->with('sucesso', 'Mensagem enviada com sucesso! Em breve entraremos em contato.');
    }
}

