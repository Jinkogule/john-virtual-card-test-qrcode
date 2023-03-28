<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    public function index(){
        return View::make('layouts.index');
    }

    public function index_com_dados(array $data){
        $nome_qr = $data['nome'];
        $linkedin_qr = $data['linkedin'];
        $github_qr = $data['github'];

        return View::make('layouts.index')->with('data', $data)->with('nome_qr', $nome_qr)->with('linkedin_qr', $linkedin_qr)->with('github_qr', $github_qr);
    }

    public function gerarQR(Request $request){
        $data = $request->all();
        $request->validate([
            'nome' => 'required',
            'linkedin' => 'required',
            'github' => 'required',
        ]);

        return $this->index_com_dados($data);
    }

    public function paginaPessoal($nome, $linkedin, $github){
        return View::make('layouts.pagina-pessoal')->with('nome', $nome)->with('linkedin', $linkedin)->with('github', $github);
    }
 
}
