<?php 
    // IMPORT MODEL
    require_once("../model/Usuario.php");
    
    // IMPORT ROTAS
    require_once("../rotas.php");

    class UsuarioController {

        public function getDadosTabela() {            
            $users = Usuario::getAll();            
            return $users;
        }

        public function store() {            
            $users = Usuario::store($_POST['nome'], $_POST['email'], $_POST['situacao'], $_POST['date']);
            return $users;
        }

        public function destroy() {
            $users = Usuario::destroy($_POST['id']);
            return $users;
        }

        public function getUsuario() {
            $user = Usuario::getUsuario($_POST['id']);
            return $user;
        }

        public function salvarEdicao() {            
            $user = Usuario::update($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['situacao'], $_POST['date']);
            return $user;
        }
    }