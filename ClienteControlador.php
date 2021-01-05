<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact(['clientes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensagens = [
            'required' => 'É necessário preencher o campo :attribute',
            'min' => 'O número de carácteres é inferior a 5',
            'max' => 'O número de carácteres é superior a 25', 
            'unique'=> 'O :attribute já está sendo utilizado',
            'email' => 'O e-mail informado não é válido'
        ];
        $request->validate([
           'Nome' => 'required|max:25',
           'Idade' => 'required',
           'Endereço' => 'required| min:5',
           'Email' => 'required|email|unique:clientes'
        ], $mensagens);
        $cliente = new Cliente();
        $cliente->nome = $request->input('Nome'); $cliente->idade = $request->input('Idade');
        $cliente->endereco = $request->input('Endereço');$cliente->email = $request->input('Email');
        $cliente->save();
        return redirect('clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        if(isset($cliente)){
            return view('informacoes', compact(['cliente']));
        } else {
            return redirect('/clientes');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        if(isset($cliente)){
            return view('editar', compact(['cliente']));
        } else {
            return redirect('/clientes');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mensagens = [
            'required' => 'É necessário preencher o campo :attribute'
        ];
        $request->validate([
           'Nome' => 'required',
           'Idade' => 'required',
           'Endereço' => 'required',
           'Email' => 'required'
        ], $mensagens);
        $cliente = Cliente::find($id);
        $cliente->nome = $request->input('Nome'); $cliente->idade = $request->input('Idade');
        $cliente->endereco = $request->input('Endereço');$cliente->email = $request->input('Email');
        $cliente->save();
        return redirect('clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        if(isset($cliente)){
            $cliente->delete();
        }
        return redirect('clientes');
    }
}
