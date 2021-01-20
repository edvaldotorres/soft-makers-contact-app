@extends('contact.master')

@section('content')

    <div class="container my-3">
        <h1>Lista de Contatos</h1>

        <?php if (!empty($contacts)); ?>

        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr class="align-items-center">
                        <th class="text-center" scope="col">ID</th>
                        <th class="text-center" scope="col">Nome</th>
                        <th class="text-center" scope="col">Sobrenome</th>
                        <th class="text-center" scope="col">Telefone</th>
                        <th class="text-center" scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contacts as $contact):

                    $linkReadMode = url('/contato/' . $contact->id);
                    $linkEditItem = url('/editar/' . $contact->id);
                    $linkRemoveItem = url('/remover/' . $contact->id);
                    
                    ?>
                    <tr>
                        <th class="text-center" scope="row"><?php echo $contact->id; ?></th>
                        <td class="text-center" ><?php echo $contact->name; ?></td>
                        <td class="text-center" ><?php echo $contact->last_name; ?></td>
                        <td class="text-center" ><?php echo $contact->tell; ?></td>
                        <td class="text-center" >
                            <a class="btn btn-primary" href="<?= $linkReadMode ?>" role="button">Visualizar</a>
                            <a class="btn btn-secondary" href="<?= $linkEditItem ?>" role="button">Editar</a>
                            <a class="btn btn-danger" href="<?= $linkRemoveItem ?>" role="button">Deletar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="container">
            {{ $contacts->links() }}
        </div>
    </div>

@endsection
