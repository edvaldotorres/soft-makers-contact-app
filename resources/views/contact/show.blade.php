@extends('contact.master')

@section('content')

    <div class="container my-3">
        <h1>Informações do Contato</h1>

        <?php
        if (!empty($contact)); 
        foreach ($contact as $cont):
        ?>

        <h4>Nome do Contato: <?= $cont->name ?></h4>
        <h4>Sobrenome: <?= $cont->last_name ?></h4>
        <h4>Telefone: <?= $cont->tell ?></h4>
        <h4>Email: <?= $cont->email ?></h4>
        <h4>Endereço: <?= $cont->address ?></h4>

        <?php endforeach; ?>

    </div>

@endsection
