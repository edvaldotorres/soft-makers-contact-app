@extends('contact.master')

@section('content')

    <div class="container my-3">
        <h1>Editar Contato</h1>

        <?php $contact = $contact[0]; ?>

        <form action="<?= url("/update", ['id' => $contact->id]); ?>" method="post">

            <?= csrf_field(); ?>

            <?= method_field('PUT') ?>

            <div class="row my-3">
                <div class="col">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" value="<?= $contact->name ?>" class="form-control" required>
                </div>
                <div class="col">
                    <label for="last_name">Sobrenome</label>
                    <input type="text" name="last_name" id="last_name" value="<?= $contact->last_name ?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="tell">Telefone</label>
                <input type="text" name="tell" id="tell" class="form-control" id="tell" value="<?= $contact->tell ?>" aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="<?= $contact->email ?>" aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="address">Endereço</label>
                <input type="text" name="address" class="form-control" id="address" value="<?= $contact->address ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
                
        </form>

        <script>
            jQuery(function($){
                $("#tell").mask("(99) 9999-9999");
            });
        </script>

    </div>

@endsection
