<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('home', ['clientes'=>$clientes]);
    }

    public function criar(Request $request){

    if ($request->isMethod('get')) {
    
        return view('cliente.criar');
    
        }
    if ($request->isMethod('post')) {
    $nome = $request->input('nome');
    $razao_social = $request->input('razao_social');
    $cnpj = $request->input('cnpj'); 
    $data_inclusao = date('d-m-Y H:i:s');
    $data = array( "nome" => $nome, "razao_social" => $razao_social, "cnpj" => $cnpj, "data_inclusao" => $data_inclusao);
    Cliente::create($data);
    return redirect()->route('home');

        }
    }

}
