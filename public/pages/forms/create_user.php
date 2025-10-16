<?php

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message', 'Preencha todos os campos');
    return redirect("contato");
}

$validate = validate([
    'nome' => 's',
    'sobrenome' => 's',
    'email' => 'e',
    'password' => 's',
]);

$cadastrado = create('users', $validate);

dd($cadastrado);

// if($cadastrado){
//     flash('message', 'Cadastrado com sucesso', 'success');
//     return redirect("create_user");
// }

// flash('message', 'Falha ao cadastrar');
// redirect("create_user");