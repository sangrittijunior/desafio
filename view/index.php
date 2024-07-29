<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Umentor Desafio Técnico</title>

    <!-- DIFININDO FAVICON -->
    <link rel="shortcut icon" type="image/png" href="/public/image/favicon-32x32.png"/>

    <!-- INCORPORANDO JQUERY -->

    <script src="/public/jquery/jquery-3.7.1.min.js"></script>

    <!-- INCORPORANDO O BOOTSTRAP -->
    <link href="/public/bootstrap/css/bootstrap.css" rel="stylesheet">    
    <script src="/public/bootstrap/js/bootstrap.js"></script>

    <!-- INCORPORANDO DATATABLE -->
    <link href="/public/datatable/datatables.min.css" rel="stylesheet">
    <script src="/public/datatable/datatables.min.js"></script>

    <!-- INCORPORANDO FONT-AWESOME -->
    <link rel="stylesheet" href="/public/font-awesome/css/font-awesome.min.css">

    <!-- INCORPORANDO SWEETALERT -->
    <script src="/public/sweetalert/sweetalert.min.js"></script>


    <meta charset="utf-8">

    <style>
        .navbar {
            background-color: #5e0185 !important;            
            height: 75px !important ;
        }

        .logo-header {
            width: 180px;
        }

        .container-fluid {
            max-width: 80% !important;
        }

        .nav-link {
            color: white !important;
            font-size: 20px;            
        }

        body {
            background-color: #ebf1f2 !important;
        }

        .main {
            max-width: 80% !important;
            margin: 0 auto;
            margin-top: 20px;            
            background-color: white !important;
            border-radius: 5px;
        }

        th {
            background-color: #5e0185 !important;
            color: white !important;
            text-align: center !important;
            border-right: 1px solid white !important;
            border-radius: 5px;
        }

        td {            
            vertical-align: middle;
            text-align: center !important;
            text-wrap: nowrap;
        }

        tr {
            height: 50px;
        }

        .tr-th {
            height: 30px !important;
        }
        
        .cadastrar-usuario {
            background-color: #5e0185 !important;
            border-color: #5e0185 !important;
            color: white !important;
            border-radius: 5px;
            font-weight: 600;
            margin-top: 10px;            
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .dt-paging {
            margin-right: 10px !important;
        }
        
        .input-form-cadastrar {
            width: 100%;
            border-radius: 5px;
            border-color: #e9eff0;
        }

        .margin-label {
            margin-top: 10px;
        }

        .acoes {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .acao-deletar {
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #dc3545;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            margin-right: 5px;
        }

        .acao-editar {
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #198754;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            margin-right: 5px;
        }

        .acao-visualizar {
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #6c757d;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            margin-right: 5px;
        }

        .botao-alinha {
            text-align: right;
        }

        .dt-search {
            margin-right: 10px;
            margin-top: 10px;
        }

        #tabela-usuario {            
            width: calc(100% - 20px) !important;
            margin-left: 10px;
            margin-right: 10px;            
            background-color: white;
        }

        .ativo {
            background-color: #1b84ff;
            border-radius: 5px;
            border: 1px solid #edf5fd;
            color: white;
            padding: 6px;
            font-size: 12px;
            font-weight: 650;   
        }

        .inativo {
            background-color: #f82859;
            border-radius: 5px;
            border: 1px solid #f82859;
            color: white;
            padding: 6px;
            font-size: 12px;
            font-weight: 650;   
        }

        .page-link {
            background-color: #e9ecef !important;
            color: #53575b;
        }

        .page-link:hover {
            background-color: #e9ecef !important;
            color: #53575b;
        }

        .page-link.active, .active > .page-link {
            background-color: #5e0185 !important;
            border-color: #5e0185 !important;
        }

        .active:hover {
            background-color: #5e0185 !important;
            border-color: #5e0185 !important;
            color: white !important;
        }

        #error-cadastro {
            color: red;
            margin-left: 15px;
            font-size: 20px;
            font-weight: 650;   
            margin-bottom: 10px;
        }

        #cadastrar,
        #salvar-edicao {
            background-color: #5e0185 !important;
            border-color: #5e0185 !important;
        }

    </style>
  </head>
  <body>
    
    <!-- HEADER / NAVBAR -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="/public/image/logo.svg" class="logo-header">                        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">                
            </div>
        </div>
    </nav>    

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar Usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="col-sm-12">
                        <label for="nome"><b>Nome</b> <i class="text-danger" title="Campo obrigatório">*</i></label>
                        <input type="text" id="nome" name="nome" class="form-control">

                        <label for="email" class="margin-label"><b>Email</b> <i class="text-danger" title="Campo obrigatório">*</i></label>
                        <input type="email" id="email" name="email" class="form-control">

                        <label for="situacao" class="margin-label"><b>Situação</b> <i class="text-danger" title="Campo obrigatório">*</i></label>                        
                        <select id="situacao" name="situacao" class="form-control">
                            <option value="">Selecione</option>
                            <option value="ativo">Ativo</option>
                            <option value="inativo">Inativo</option>
                        </select>

                        <label for="data-admissao" class="margin-label"><b>Data de Admissão</b> <i class="text-danger" title="Campo obrigatório">*</i></label>
                        <input type="date" id="date" name="date" class="form-control">
                    </div>
                 
                </form>
            </div>

            <div id="error-cadastro">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                <button type="button" id="cadastrar" class="btn btn-primary">Salvar</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditar" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar Usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="col-sm-12">
                        <input type="text" id="id-edit" name="id-edit" class="form-control" style="display: none;">

                        <label for="nome"><b>Nome</b> <i class="text-danger" title="Campo obrigatório">*</i></label>
                        <input type="text" id="nome-edit" name="nome-edit" class="form-control">

                        <label for="email" class="margin-label"><b>Email</b> <i class="text-danger" title="Campo obrigatório">*</i></label>
                        <input type="email" id="email-edit" name="email-edit" class="form-control">

                        <label for="situacao" class="margin-label"><b>Situação</b> <i class="text-danger" title="Campo obrigatório">*</i></label>                        
                        <select id="situacao-edit" name="situacao-edit" class="form-control">
                            <option value="">Selecione</option>
                            <option value="ativo">Ativo</option>
                            <option value="inativo">Inativo</option>
                        </select>

                        <label for="data-admissao" class="margin-label"><b>Data de Admissão</b> <i class="text-danger" title="Campo obrigatório">*</i></label>
                        <input type="date" id="date-edit" name="date-edit" class="form-control">
                    </div>
                 
                </form>
            </div>

            <div id="error-cadastro">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                <button onclick="salvarEdicao()" type="button" id="salvar-edicao" class="btn btn-primary">Salvar</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalVisualizar" tabindex="-1" aria-labelledby="modalVisualizar" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar Usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="col-sm-12">                        
                        <label for="nome"><b>Nome</b></label>
                        <input type="text" id="nome-visualizar" name="nome-visualizar" class="form-control" disabled>

                        <label for="email" class="margin-label"><b>Email</b></label>
                        <input type="email" id="email-visualizar" name="email-visualizar" class="form-control" disabled>

                        <label for="situacao" class="margin-label"><b>Situação</b></label>
                        <select id="situacao-visualizar" name="situacao-visualizar" class="form-control" disabled>
                            <option value="">Selecione</option>
                            <option value="ativo">Ativo</option>
                            <option value="inativo">Inativo</option>
                        </select>

                        <label for="data-admissao" class="margin-label"><b>Data de Admissão</b></label>
                        <input type="date" id="date-visualizar" name="date-visualizar" class="form-control" disabled>

                        <label for="data-criação" class="margin-label"><b>Data de Criação</b></label>
                        <input type="date" id="date-criacao-visualizar" name="date-criacao-visualizar" class="form-control" disabled>

                        <label for="data-criação" class="margin-label"><b>Data da Última Edição</b></label>
                        <input type="date" id="date-edicao-visualizar" name="date-edicao-visualizar" class="form-control" disabled>
                    </div>
                 
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>                
            </div>
            </div>
        </div>
    </div>

    <main class="main">
        
        <div class="col-sm-12">
            <table id="tabela-usuario" class="table table-striped">
                <thead>
                    <tr class="tr-th">
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>SITUAÇÃO</th>
                        <th>ADMISSÃO</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>
                <tbody>                                   
                </tbody>
            </table>
        </div>

        <div class="col-sm-12 botao-alinha">
            <button type="button" class="btn btn-primary cadastrar-usuario" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Cadastrar Usuário
            </button>
        </div>
        
    </main>


  </body>
</html>

<script>
    
    let table = new DataTable('#tabela-usuario', { 
        paging: true,
        pageLength: 10,            
        lengthChange: false,
        ordering: false,
        bInfo: false,
        language: {
            url: '/public/datatable/pt-br.json',
            sLengthMenu: "_MENU_"
        },            
    });


    function visualizar(id) {

        $.ajax({
            url: "/controller/UsuarioController.php",
            type: "POST",
            data: {
                tipo: "getUsuario",
                id: id
            },

            success:function(data){
                data = JSON.parse(data);                
                $("#nome-visualizar").val(data['nome']);
                $("#email-visualizar").val(data['email']);
                $("#situacao-visualizar").val(data['situacao']);
                $("#date-visualizar").val(data['data_admissao']);
                $("#date-criacao-visualizar").val(data['created_at']);
                $("#date-edicao-visualizar").val(data['updated_at']);
            }
        });

        $('#modalVisualizar').modal('show');
        
    }

    function editar(id){                
        limparCamposEdit();

        $.ajax({
            url: "/controller/UsuarioController.php",
            type: "POST",
            data: {
                tipo: "getUsuario",
                id: id
            },

            success:function(data){
                data = JSON.parse(data);
                $("#id-edit").val(data['id']);
                $("#nome-edit").val(data['nome']);
                $("#email-edit").val(data['email']);
                $("#situacao-edit").val(data['situacao']);
                $("#date-edit").val(data['data_admissao']);
            }
        });

        $('#modalEditar').modal('show');
    }

    function salvarEdicao() {

        var id       = $("#id-edit").val();
        var nome     = $("#nome-edit").val();
        var email    = $("#email-edit").val();
        var situacao = $("#situacao-edit").val();
        var date     = $("#date-edit").val();
        
        /* VALIDANDO CAMPOS */
        if (!validaCampo(nome, 'nome') || 
            !validaCampo(email, 'e-mail') || 
            !validaCampo(situacao, 'situação') || 
            !validaCampo(date, 'data')) {
                
            return false;
        }

        $.ajax({
            url: "/controller/UsuarioController.php",
            type: "POST",
            data: {
                tipo: "salvarEdicao",
                id: id,
                nome: nome,
                email: email,
                situacao: situacao,
                date: date
            },

            success:function(data) {
                console.log(data);
                $('#modalEditar').modal('hide');
                table.clear().draw();
                carregaDadosTabela();

                Swal.fire({
                    title: "Sucesso!",
                    text: "Usuário editado com sucesso!",
                    icon: "success"
                });
                                
            }
        });
        
    }

    function validaCampo(campo, nome){
        if (typeof campo === "undefined" || campo == "" || campo == null) {
            $("#error-cadastro").html("<i class='fa fa-exclamation-triangle'></i> Campo " + nome + " está em branco!");

            setTimeout(() => {
                $("#error-cadastro").html("");
            }, "3000");

            return false;
        } else {
            return true;
        }
        
    }

    function limparCamposCadastro() {
        $("#nome").val("");
        $("#email").val("");
        $("#situacao").val("");
        $("#date").val("");

        return true;
    }

    function limparCamposEdit() {
        $("#nome-edit").val("");
        $("#email-edit").val("");
        $("#situacao-edit").val("");
        $("#date-edit").val("");

        return true;
    }

    $("#cadastrar").on("click", function(){
        var nome     = $("#nome").val();
        var email    = $("#email").val();
        var situacao = $("#situacao").val();
        var date     = $("#date").val();

        /* VALIDANDO CAMPOS */
        if (!validaCampo(nome, 'nome') || 
            !validaCampo(email, 'e-mail') || 
            !validaCampo(situacao, 'situação') || 
            !validaCampo(date, 'data')) {
                
            return false;
        }
                        
        $.ajax({

            url: "/controller/UsuarioController.php",
            type: "POST",
            data: {
                tipo: "salvar",
                nome:     nome,
                email:    email,
                situacao: situacao,
                date:     date
            },
            success:function(data){                
                data = JSON.parse(data);
                table.row.add([
                    data[1].toUpperCase(),
                    data[2].toUpperCase(),
                    "<span class=" + data[3].toLowerCase() + ">" + data[3].toUpperCase() + "</span>",
                    new Date(data[4] + " 00:00:00").toLocaleDateString(),
                    "<div class='acoes'> <div class='acao-deletar' onclick='deletar(" + data[0] + ")'> <i class='fa fa-trash'></i> </div> <div class='acao-editar' onclick='editar(" + data[0] + ")'> <i class='fa fa-pencil'></i> </div> <div class='acao-visualizar' onclick='visualizar(" + element.id + ")'> <i class='fa fa-eye'></i> </div> </div>",
                ]).draw(false);

                $('#exampleModal').modal('hide');
                limparCamposCadastro();

                Swal.fire({
                    title: "Sucesso!",
                    text: "Usuário cadastrado com sucesso!",
                    icon: "success"
                });
                
            }
        })
    });

    function carregaDadosTabela(){
        $.ajax({
            url: "/controller/UsuarioController.php",
            type: "POST",
            data: {
                tipo: "leitura"
            },

            success:function(data){
                data = JSON.parse(data);
                data.forEach(function(element){
                    table.row.add([                        
                        element.nome.toUpperCase(),
                        element.email.toUpperCase(),
                        "<span class=" + element.situacao + ">" + element.situacao.toUpperCase() + "</span>",
                        new Date(element.data_admissao + " 00:00:00").toLocaleDateString(),
                        "<div class='acoes'> <div class='acao-deletar' onclick='deletar(" + element.id + ")'> <i class='fa fa-trash'></i> </div> <div class='acao-editar' onclick='editar(" + element.id + ")'> <i class='fa fa-pencil'></i> </div> <div class='acao-visualizar' onclick='visualizar(" + element.id + ")'> <i class='fa fa-eye'></i> </div> </div>",
                    ]).draw(false);
                });
            }
        })        
    }

    function deletar(id){

        Swal.fire({
            title: "Você tem certeza que deseja deletar?",
            text: "Você não poderá reverter isso!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            cancelButtonText: "Cancelar",
            confirmButtonText: "Deletar!"
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/controller/UsuarioController.php",
                    type: "POST",
                    data: {
                        tipo: "delecao",
                        id: id
                    },

                    success:function(data){              
                    table.clear().draw();
                    carregaDadosTabela();

                    Swal.fire({
                        title: "Deletado!",
                        text: "Usuário deletado com sucesso!",
                        icon: "success"
                    });

                    }
                });                
            }
            });

    }

    carregaDadosTabela();

</script>