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
        $total=0;

        $lista = [[
            'cpf'=>154687,            
            'nome' => 'bruno1',
            'email' => 'bruno1@gmail',
            'total' => 150.0,
            
        ],[
            'cpf'=>1535468,            
            'nome' => 'bruno2',
            'email' => 'bruno2@gmail',
            'total' => 150.0,
            
        ],[
            'cpf'=>459875,            
            'nome' => 'bruno3',
            'email' => 'bruno3@gmail',
            'total' => 150.0,
            
        ]];

        foreach ($lista as $listar) {
            $total += $listar['total'];}

        return view('site.loja.listar',compact ('lista','total'));
    }

    public function contato()
    {
        return view('site.loja.contato');
    }

}
