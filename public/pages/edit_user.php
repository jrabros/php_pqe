<?php echo get('message')?>

<?php 
$user = find('users', 'id', $_GET['id']);
?>
<form action="pages/forms/update_user.php" method="post" role="form">

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="nome" value="<?php echo $user->nome?>" placeholder="Digite seu nome">
    </div>

    <input type="hidden" name="id" value="<?php echo $user->id?>">
    
    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" value="<?php echo $user->sobrenome?>" placeholder="Digite seu sobrenome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" value="<?php echo $user->email?>" placeholder="Digite o e-mail">
    </div>

    <div class="form-group">
        <label for="">Senha</label>
        <input type="text" class="form-control" name="password" placeholder="Digite a senha">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>