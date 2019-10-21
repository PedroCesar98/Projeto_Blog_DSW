<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Perguntas;
use App\Login;

class BlogController extends Controller
{
    public function inicio(){
    	$perguntas = perguntas::all();
    	return view('welcome')->with('perguntas',$perguntas);
    }

    public function adminTela(){
    	$perguntas = perguntas::all();
    	return view('admin')->with('perguntas',$perguntas);
    }

    public function login(){
    	return view('login');
    }

    public function verificarLogin(Request $request){
    	$login = login::all();
    	$perguntas = perguntas::all();
    	if($request->user == 'admin' && $request->senha == 'admin'){
    		return view('admin')->with('perguntas',$perguntas);
    	}else{
    		return view('welcome')->with('perguntas',$perguntas);
    	}
    }

    public function create(Request $request){
    	$pergunta = new Perguntas;
    	$pergunta->nome = $request->nome;
    	$pergunta->pergunta = $request->pergunta;
    	$pergunta->save();
    	return redirect()->back();
    }

    public function delete($id){
    	$pergunta = Perguntas::find($id);
    	$pergunta->delete();
    	return redirect()->back();
    }

    public function update($id, Request $request){
    	$pergunta = Perguntas::find($id);
    	$pergunta->resposta = $request->resposta;
    	$pergunta->update();
    	return redirect()->back();
    }
}
