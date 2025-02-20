<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagamentos</title>
    <!-- <script type="module" src="./js/main.js"></script> -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container py-4 px-3 mx-auto">
        <form action="{{route('finalizar')}}" method="post">
            @csrf
            <div class="form-check">
                <input class="form-check-input" type="radio" name="forma_pagamento" id="boleto" value="boleto" value="boleto">
                <label class="form-check-label" for="boleto">
                    Boleto
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="forma_pagamento" id="cartao_credito" value="cartao_credito">
                <label class="form-check-label" for="cartao_credito">
                    Cartão de Crédito
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="forma_pagamento" id="pix" value="pix">
                <label class="form-check-label" for="pix">
                    Pix
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Finalizar Pagamento</button>
        </form>

    </div>
</body>

</html>