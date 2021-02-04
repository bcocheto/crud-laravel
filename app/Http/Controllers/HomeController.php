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

    // função principal onde é chamada a página inicial após login
    // resposável também por listar os clientes já cadastrados
    public function index()
    {
        $clientes = Cliente::all();
        return view('home', ['clientes'=>$clientes]);
    }

    // função responsável por criar clietes
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

    // função responsável por chamar a view para alteração de dados
     public function alterar(Cliente $cliente){

        //  dd($cliente);

        return view('cliente.alterar', ['cliente' => $cliente]);

         }

    // função responsável por alterar os dados
     public function atualizar(Request $request, $cliente_id){
            // acha o cliente
            $cliente = Cliente::find($cliente_id);
            // fill acha os atributos do cliente atribuidos
            // a variável $fillable no model
            $cliente->fill($request->all());

            // dd($cliente);

            $cliente->save();
            
            return redirect()->route('home');
 

     }

    // função responsável por deletar os dados
    public function deletar(Request $request, $cliente_id){

        $cliente = Cliente::find($cliente_id);
        // dd($cliente);



        $cliente->delete();

        return redirect()->route('home');

    }

}
