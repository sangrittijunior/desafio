<?php 

    require_once("../configuracao.php");
    class Usuario {

        protected $mysqli;

        public function __construct(){
            $this->conexao();
        }

        public function conexao() {            
            return new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
        }

        public function getAll() {
            $banco = Usuario::conexao();
            $result = $banco->query("SELECT * FROM usuario");
            $array = [];

            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $array[] = $row;
            }                                    

            return json_encode($array);
        }

        public function store($nome, $email, $situacao, $date) {
            $banco      = Usuario::conexao();
            $dataAtual  = date('Y-m-d');
            $query      = "INSERT INTO usuario (nome, email, situacao, data_admissao, created_at, updated_at) values ('$nome', '$email', '$situacao', '$date', '$dataAtual', '$dataAtual' )";
            $banco->query($query);

            $resultado[0] = $banco->insert_id;
            $resultado[1] = $nome;
            $resultado[2] = $email;
            $resultado[3] = $situacao;
            $resultado[4] = $date;            
                        
            return json_encode($resultado);
        }

        public function destroy($id) {
            $banco = Usuario::conexao();
            $query = "DELETE FROM usuario WHERE id = $id";
            $banco->query($query);

            return true;
        }

        public function getUsuario($id) {
            $banco = Usuario::conexao();
            $result = $banco->query("SELECT * FROM usuario where id = $id");
            $array = [];

            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $array[] = $row;
            }                                    

            return json_encode($array[0]);            
        }

        public function update($id, $nome, $email, $situacao, $date) {
            $banco = Usuario::conexao();
            $dataAtual  = date('Y-m-d');
            $query = "UPDATE usuario set nome = '$nome', email = '$email', situacao = '$situacao', data_admissao = '$date', updated_at = '$dataAtual' where id = $id";
            $banco->query($query);
            
            return true;
        }
    }

?>