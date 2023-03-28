<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $nome }} - Perfil</title>
        
        <!--Favicon-->
        <link rel="icon" href="/images/favicons/qrcode_favicon.png"/>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/blog.css">

        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body class="antialiased">
        <div class="container container-blog">
            <h1>Olá, meu nome é {{ $nome }}</h1>
            <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae scelerisque arcu. Donec pulvinar nisi ut urna tincidunt dapibus. Etiam vel rhoncus nunc. Cras sagittis tincidunt sapien, sit amet accumsan eros consectetur eleifend. Nulla eu magna bibendum, ultricies purus et, faucibus leo. Maecenas risus justo, rutrum at tristique eu, viverra ut sapien. Donec vel justo purus. Nullam id risus volutpat, porta nunc non, dignissim mi.
            <br>
            Curabitur malesuada quam ac purus congue pulvinar. Fusce sodales sem nec interdum venenatis. Nunc sagittis sagittis cursus. Sed scelerisque quam nec eleifend porta. Ut at turpis et neque vehicula ullamcorper. Sed ante eros, commodo sed dignissim ac, mollis a tellus. Pellentesque vitae sapien at est pharetra facilisis rhoncus ullamcorper augue. Suspendisse ut maximus ligula. Aliquam justo lectus, ornare vitae varius ut, porta imperdiet nisi. Phasellus venenatis est ipsum, ut tempor nunc malesuada in. Cras in aliquet tortor.
            <br>
            Nulla auctor massa nunc, at fermentum purus viverra in. Mauris sed maximus enim. Quisque et arcu id felis euismod egestas. Sed volutpat libero mattis justo luctus, quis venenatis nisl gravida. Etiam rutrum ipsum vitae tincidunt cursus. Curabitur pretium in enim in fringilla. Duis consectetur lacinia egestas.
            <br>
            Nulla facilisi. Integer molestie, nisi nec blandit lobortis, leo felis posuere massa, eu laoreet tellus felis venenatis turpis. In sagittis lacinia urna, non varius enim placerat eleifend. Mauris sed orci ornare, imperdiet sapien eu, interdum enim. Ut laoreet dapibus congue. Maecenas nunc augue, rhoncus non consequat sit amet, porta sed est. Suspendisse potenti. Mauris semper mi quam, a sodales metus facilisis in.
            <br>
            Ut lacus lorem, sodales quis mi in, convallis tempor ipsum. Mauris sapien lectus, fermentum a turpis quis, hendrerit sollicitudin mi. Integer facilisis erat nec ligula mattis, ut dignissim ipsum tempus. Aliquam erat volutpat. Curabitur cursus nibh ac sagittis luctus. Vestibulum pharetra fermentum egestas. Maecenas a augue non massa pretium viverra.
            <br><br>
            <div class="row">
                <div class="col d-flex flex-row justify-content-center align-items-center">
                    <a href="https://www.linkedin.com/in/{{ $linkedin }}" target="_blank"><img src="{{asset('./images/social-media-icons/linkedin.png')}}" class="social-media-icons"></a>
                </div>
                <div class="col d-flex flex-row justify-content-center align-items-center">
                    <a href="https://github.com/{{ $github }}" target="_blank"><img src="{{asset('./images/social-media-icons/github.png')}}" class="social-media-icons"></a>
                </div>
            </div>
            <br>
        </div>
       
    </body>
</html>
