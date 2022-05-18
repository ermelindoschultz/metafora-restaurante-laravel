<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/pedir', function(Request $request){
    $tipo_mesa = $request->input('tipo_mesa');

    $entrada_direita = $request->input('entrada_cliente_direita');
    $entrada_esquerda = $request->input('entrada_cliente_esquerda');
    $prato_principal_direita = $request->input('prato_principal_cliente_direita');
    $prato_principal_esquerda = $request->input('prato_principal_cliente_esquerda');
    
    if($tipo_mesa == 'casal'){
        $servir_entradas = [
            'primeiro' => "servir {$entrada_esquerda} para a mulher sentada à esquerda",
            'após' => "servir {$entrada_direita} para o homem sentado à direita",
        ];

        $servir_pratos_principais = [
            'primeiro' => "servir {$prato_principal_esquerda} para a mulher sentada à esquerda",
            'após' => "servir {$prato_principal_direita} para o homem sentado à direita",
        ];
    }else{
        $servir_entradas = [
            'primeiro' => "servir {$entrada_direita} para amigo sentado à direita",
            'após' => "servir {$entrada_esquerda} para o amigo sentado à esquerda",
        ];

        $servir_pratos_principais = [
            'primeiro' => "servir {$prato_principal_direita} para amigo sentado à direita",
            'após' => "servir {$prato_principal_esquerda} para o amigo sentado à esquerda",
        ];   
    }

    return response()->json([
        'servir_entradas' => $servir_entradas,
        'servir_prato_principal' => $servir_pratos_principais
    ]);
});
