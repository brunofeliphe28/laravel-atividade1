<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    public function cliente()
    {
        $subtitulo= 'Aqui tem uma variavel só pra falar que fiz a atividade';
        return view('site.loja.cliente', compact('subtitulo'));
    }

    public function listar()
    {

        $lista = [[
            'cpf' => 12323,
            'nome' => 'bruno1',
            'email' => 'bruno1@gmail',
            
        ],[
            'cpf' => 653454,
            'nome' => 'bruno2',
            'email' => 'bruno2@gmail',
            
        ],[

            'cpf' => 84848,
            'nome' => 'bruno3',
            'email' => 'bruno3@gmail',
            
        ]];

        return view('site.loja.listar',compact ('lista'));
    }

    public function contato()
    {
        return view('site.loja.contato');
    }

}
