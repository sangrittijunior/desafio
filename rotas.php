<?php 
    // SISTEMA BÁSICO DE ROTAS - AJAX PARA O CONTROLLER
    $tipo = $_POST['tipo'];

    if ($tipo == "leitura") {
        echo UsuarioController::getDadosTabela();
        return true;
    } else if ($tipo == "salvar") {
        echo UsuarioController::store();
    } else if ($tipo == "delecao") {
        echo UsuarioController::destroy();
    } else if ($tipo == "getUsuario") {
        echo UsuarioController::getUsuario();
    } else if ($tipo == "salvarEdicao") {        
        echo UsuarioController::salvarEdicao();
    }
?>