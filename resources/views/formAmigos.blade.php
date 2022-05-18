<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Metafora Restaurante</title>
    </head>
    <body class="antialiased">
        <div class="d-flex flex-column justify-content-center" style="max-width: 900px">
            <div class="row">
                <h1>Metáfora Restaurante - Laravel</h1>
            </div>
            <div class="row">
                <form action="/api/pedir" method="POST">
                    <div class="mb-3">
                        <h1>Servir amigos</h1>
                    </div>

                    <div class="mb-3">
                        <h2>Pedido cliente à esquerda: </h1>
                    </div>  
                    <div class="mb-3">
                        <label>Entrada: </label>
                        <select name="entrada_cliente_esquerda" class="form-control">
                            <option value="burrata">Burrata</option>
                            <option value="bruschetta">Bruschetta</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Prato principal: </label>
                        <select name="prato_principal_cliente_esquerda" class="form-control">
                            <option value="lasanha">Lasanha</option>
                            <option value="espaguete">Espaguete</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <h2>Pedido cliente à direita: </h1>
                    </div>  
                    <div class="mb-3">
                        <label>Entrada: </label>
                        <select name="entrada_cliente_direita" class="form-control">
                            <option value="burrata">Burrata</option>
                            <option value="bruschetta">Bruschetta</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Prato principal: </label>
                        <select name="prato_principal_cliente_direita" class="form-control">
                            <option value="lasanha">Lasanha</option>
                            <option value="espaguete">Espaguete</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="tipo_mesa" value="amigos" />
                        <button type="submit">Pedir</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
