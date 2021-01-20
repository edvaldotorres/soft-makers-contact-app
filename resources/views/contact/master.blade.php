<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftMakers Contatos</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Mask Plugin CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" defer></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="<?= url('/') ?>" class="navbar-brand">SoftMakers<b>Contatos</b></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?= url('/') ?>" class="nav-link">Lista de Contatos</a></li>
            <li class="nav-item"><a href="<?= url('/novo') ?>" class="nav-link">Novo Contato</a></li>
        </ul>
    </div>
</nav>

@yield('content')

<!-- Bootstrap JS -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
