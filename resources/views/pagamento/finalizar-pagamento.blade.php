<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagamentos - Finalizar Pagamento</title>
    <!-- <script type="module" src="./js/main.js"></script> -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container py-4 px-3 mx-auto">
    @if (!empty($encodedImage))
        <img src="data:image/gif;base64, {{$encodedImage}}" />
        <h2>Obrigado!</h2>
    @endif
    </div>
</body>

</html>