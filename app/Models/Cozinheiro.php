<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cozinheiro extends Model
{
    use HasFactory;

    public function cozinhar($tipo_mesa, $entrada_1, $entrada_2, $prato_principal_1, $prato_principal_2){
        if($tipo_mesa == 'casal'){
            $servir_entradas = [
                'primeiro' => "servir {$entrada_1} para a mulher sentada à esquerda",
                'após' => "servir {$entrada_2} para o homem sentado à direita",
            ];
    
            $servir_pratos_principais = [
                'primeiro' => "servir {$prato_principal_1} para a mulher sentada à esquerda",
                'após' => "servir {$prato_principal_2} para o homem sentado à direita",
            ];
        }else{
            $servir_entradas = [
                'primeiro' => "servir {$entrada_2} para amigo sentado à direita",
                'após' => "servir {$entrada_1} para o amigo sentado à esquerda",
            ];
    
            $servir_pratos_principais = [
                'primeiro' => "servir {$prato_principal_2} para amigo sentado à direita",
                'após' => "servir {$prato_principal_1} para o amigo sentado à esquerda",
            ];   
        }

        return [
            'servir_entradas' => $servir_entradas,
            'servir_prato_principal' => $servir_pratos_principais
        ];
    }
}
