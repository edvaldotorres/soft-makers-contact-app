@extends('contact.master')

@section('content')

    <div class="container my-3">
        <h1>Cadastrar Contato</h1>

        <form action="<?= url('/store') ?>" method="post">

            <?= csrf_field() ?>

            <div class="row my-3">
                <div class="col">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Tarcisio" required>
                </div>
                <div class="col">
                    <label for="last_name">Sobrenome</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Makers" required>
                </div>
            </div>

            <div class="form-group">
                <label for="tell">Telefone</label>
                <input type="text" name="tell" id="tell" class="form-control" id="tell" aria-describedby="emailHelp" placeholder="(00) 0000-0000" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="tarcisio@softmakers.me" required>
            </div>

            <div class="form-group">
                <label for="address">Endereço</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Rua caruaru brazil" required>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>

        </form>

        <script>
            jQuery(function($){
                $("#tell").mask("(99) 9999-9999");
            });
        </script>

    </div>

@endsection
