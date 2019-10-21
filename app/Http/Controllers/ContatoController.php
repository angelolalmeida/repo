<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoSite;

class ContatoController extends Controller
{
    public function mail(Request $request) {
        //Recebe e trata os e-mails
        if (isset($request->nome)) {
            $registro = array();
            $registro['nome'] = $request->nome;
            $registro['telefone'] = $request->telefone;
            $registro['mensagem'] = $request->mensagem;
            Mail::to('angelolalmeida@yahoo.com.br')
            ->cc('velloso@manvell.com.br')
            ->send(new ContatoSite($registro));
            return redirect()->route('index')->withStatus(__('E-mail Enviado'));
        }
    }
}
