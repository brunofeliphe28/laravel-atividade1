<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function contato()
    {
        return view('site.loja.contato');
    }


    public function cliente()
    {
        return view('site.loja.cliente');
    }

    public function listar()
    {

        $lista = [[
            'cpf' => 1223,
            'nome' => 'bruno1',
            'email' => 'bruno1@gmail',
            
        ],[
            'cpf' => 1223,
            'nome' => 'bruno2',
            'email' => 'bruno1@gmail',
            
        ],[

            'cpf' => 1223,
            'nome' => 'bruno3',
            'email' => 'bruno1@gmail',
            
        ]];

        return view('site.loja.listar',compact ('lista'));
    }

}
