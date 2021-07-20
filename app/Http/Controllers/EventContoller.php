<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventContoller extends Controller
{
    public function index(){
        $nome = "Yuri";
        $idade = 29;
    
        $arr = [1,2,3,4,5];
    
        $nomes = ["Matheus", "Maria", "João", "Paulo"];
    
        return view('welcome',["nome" => $nome,
         "idade" => $idade,
         "profissao" => "Programador",
        "arr" => $arr,
        "nomes" => $nomes
      ]);
    }

    public function create(){
        return view('events.create');
    }
}
