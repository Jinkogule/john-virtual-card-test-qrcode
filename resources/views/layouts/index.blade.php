<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gere seu QRCode</title>

        <!--Favicon-->
        <link rel="icon" href="{{ URL::asset('/images/favicons/qrcode_favicon.png') }}"/>

        <!--Bootstrap-->
        @include('comuns.bootstrap')

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body class="antialiased">
        <div class="container container-form">
            <h1 style="color: #fff; text-align: center; padding-top: 10px;">Gere seu QRCode</h1>
            <hr>
            <form action="{{ route('gerarQR') }}" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <label for="nome" style="color: #fff;">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" required>
                </div>

                <div class="form-group mb-2">
                    <label for="linkedin" style="color: #fff;">LinkedIn</label>
                    <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="https://www.linkedin.com/in/exemplo" pattern="https://www.linkedin.com/in/.*" required>
                </div>

                <div class="form-group mb-4">
                    <label for="github" style="color: #fff;">GitHub</label>
                    <input type="text" class="form-control" id="github" name="github" placeholder="https://github.com/exemplo" pattern="https://github.com/.*" required>
                </div>
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="d-flex flex-row justify-content-center align-items-center mt-3 pb-4">
                    <button type="submit" class="btn btn-success mb-2">Gerar QRCode</button>
                </div>
            </form>
            <!--Display do QRCode caso usuário tenha submetido o formulário-->
            @if(!empty($nome_qr))
                <?php
                $linkedin_compactado = str_replace("https://www.linkedin.com/in/", "", $linkedin_qr);
                $linkedin_compactado = rtrim($linkedin_compactado, "/");
                $github_compactado = str_replace("https://github.com/", "", $github_qr);
                
                $url_qrcode = "$nome_qr/$linkedin_compactado/$github_compactado";
                ?>
                <hr>
                <div class="d-flex flex-row justify-content-center align-items-center" style="color: #fff">
                    Olá {{ $nome_qr }}, aqui está seu QRCode!
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3 pb-4">
                    {!! QrCode::size(300)->generate('/' .$url_qrcode) !!}
                </div>
            @endif
        </div>
    </body>
</html>
