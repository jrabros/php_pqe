<?php echo get('message')?>

<form action="pages/forms/create_user.php" method="post" role="form">

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
    </div>
    
    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite o e-mail">
    </div>

    <div class="form-group">
        <label for="">Senha</label>
        <input type="text" class="form-control" name="password" placeholder="Digite a senha">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>