<?php

include('./includes/validadores.php');

//Para exibir conteúdo de variáveis:
//echo $qquercoisa;
//var_dump($qquecoisa);
//print_r($sqquercoisa);

//Para interromper um script:
//die('string antes de morrer...');
//exit 0 ou 1;

echo('<pre>');
print_r($_POST);
echo('</pre>');
//criando array de erros
$erros = [];

//

//Verificando se o POST foi enviado

if(count($_POST) == 0){
    die('Post não enviado.');
}

//Verificando se login foi preenchido

if(empty($_POST['login'])){
    die('Login não preenchido.');
}

//Verificando se email foi preenchido

if(!valida_campoNecessario($_POST['email'])){
    die('E-mail não preenchido.');
}

//Verificando se senha foi preenchido

if(!valida_campoNecessario($_POST['senha'])){
    die('Senha não preenchida.');
}

//Verificando confirmação de senha foi preenchido

if(!valida_campoNecessario($_POST['confirmação'])){
    die('Confirmação de senha não preenchida.');
}

//Verificando se senha é igual a confirmação de senha

if($_POST['senha'] != $_POST['confirmação']){
    die('Confirmação não confere com senha.');
}

if(! is_integer($_POST['idade']*1)){
    die('Digite uma idade numérica');
}

//Validando país

if(!valida_pais($_POST['pais'])){
    die('País inválido');
}



?>