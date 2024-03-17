<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de Cliente
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/cliente" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome do Cliente</label>
                            <input class="form-control {{ $errors -> has('nome') ? 'is-invalid' : ''}}" type="text" id="nome" name="nome" placeholder="Nome do Cliente">

                            @if ( $errors -> has('nome') )

                                <div class="invalid-feedback">
                                    {{ $errors->first('nome') }}
                                </div>

                            @endif

                            <label for="idade">Idade do Cliente</label>
                            <input class="form-control {{ $errors -> has('idade') ? 'is-invalid' : ''}}"  type="text" id="idade" name="idade" placeholder="Idade do Cliente">

                            @if ( $errors -> has('idade') )

                                <div class="invalid-feedback">
                                    {{ $errors->first('idade') }}
                                </div>

                            @endif


                            <label for="endereco">Endereço do Cliente</label>
                            <input class="form-control {{ $errors -> has('endereco') ? 'is-invalid' : ''}}" type="text" id="endereco" name="endereco" placeholder="Endereço do Cliente">

                            @if ( $errors -> has('endereco') )

                                <div class="invalid-feedback">
                                    {{ $errors->first('endereco') }}
                                </div>

                            @endif

                            <label for="email">E-mail do Cliente</label>
                            <input class="form-control {{ $errors -> has('email') ? 'is-invalid' : ''}}" type="text" id="email" name="email" placeholder="E-mail do Cliente">

                            @if ( $errors -> has('email') )

                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>

                            @endif

                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        <button type="cancel" class="btn btn-danger btn-sm">Salvar</button>
                    </form>
                </div>
            </div>
        </main>

    <script src="/js/app.js" type="javascript"></script>
</body>
</html>