<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cozinheiro;

class Chef extends Controller
{
    public function servico(Request $request)
    {
        $all_values = $request->all();

        $tipo_mesa = $request->input('tipo_mesa');
    
        $entrada_direita = $request->input('entrada_cliente_direita');
        $entrada_esquerda = $request->input('entrada_cliente_esquerda');
        $prato_principal_direita = $request->input('prato_principal_cliente_direita');
        $prato_principal_esquerda= $request->input('prato_principal_cliente_esquerda');
        
        $cozinheiro = new Cozinheiro();

        $cozido = $cozinheiro->cozinhar($tipo_mesa, $entrada_esquerda, $entrada_direita,$prato_principal_esquerda,$prato_principal_direita);
    
        return response()->json([
            'requisicao' => $all_values,
            'entrega' => $cozido
        ]);
    }
}
