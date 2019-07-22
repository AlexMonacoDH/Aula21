<?php

function valida_campoNecessario($campo){
    if((!isset($_POST[$campo])) || ($_POST[$campo] == '')){
        return false;
    }
    else{
        return true;
    }
}

// Verificação de países
