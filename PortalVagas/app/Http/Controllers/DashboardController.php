<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');
        $vagas = Vaga::when($search, function ($query, $search) {
            return $query->where('titulo_vaga', 'like', "%{$search}%")
                ->orWhere('descricao_vaga', 'like', "%{$search}%")
                ->orWhere('localizacao_vaga', 'like', "%{$search}%")
                ->orWhere('id_empresa', 'like', "%{$search}%");
            }) ->get();

            return view('usuarios.dashboard', compact('vagas'));
    }
}
