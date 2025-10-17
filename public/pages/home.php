<a href="?page=create_user">Cadastrar user</a>

<h2>Página Inicial</h2>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id
            <th>Nome
            <th>Email
            <th>
            <th>
    </thead>
    <tbody>
        <?php 
        $users = all('users');
        foreach($users as $user):
        ?>
        <tr>
            <td><?php echo $user->id;?>
            <td><?php echo $user->nome;?>
            <td><?php echo $user->email;?>
            <td><a href="?page=edit_user&id=<?php echo $user->id?>" class="btn btn-success">Editar</a>
            <td><a href="?page=delete_user" class="btn btn-danger">Deletar</a>
        <?php endforeach;?>
    </tbody>
</table>