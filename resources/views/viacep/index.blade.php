<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Via cep</title>
</head>
<body>
<div>
    <form action="{{ route('viacep.index.post') }}">
        @csrf
        <label for="cep">Insira o CEP</label>
        <input id="cep" type="text" name="cep">

        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>
