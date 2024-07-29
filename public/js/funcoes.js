// iniciando o datatable
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

// funções relativas aos modais/registros
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

function editar(id) {
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
    /* VALIDANDO CAMPOS */
    if (!validaCampo($("#nome-edit").val(), 'nome')         || 
        !validaCampo($("#email-edit").val(), 'e-mail')      || 
        !validaCampo($("#situacao-edit").val(), 'situação') || 
        !validaCampo($("#date-edit").val(), 'data')) {
        return false;
    }

    $.ajax({
        url: "/controller/UsuarioController.php",
        type: "POST",
        data: {
            tipo: "salvarEdicao",
            id: $("#id-edit").val(),
            nome: $("#nome-edit").val(),
            email: $("#email-edit").val(),
            situacao: $("#situacao-edit").val(),
            date: $("#date-edit").val()
        },
        success:function(data) {            
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

// valida se campo está vazio e gera uma mensagem de erro
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

// limpar modal de cadastro
function limparCamposCadastro() {
    $("#nome").val("");
    $("#email").val("");
    $("#situacao").val("");
    $("#date").val("");
    return true;
}
    
// Quando o botao de cadastrar for pressionado 
$("#cadastrar").on("click", function(){
    /* VALIDANDO CAMPOS */
    if (!validaCampo($("#nome").val(), 'nome')         || 
        !validaCampo($("#email").val(), 'e-mail')      || 
        !validaCampo($("#situacao").val(), 'situação') || 
        !validaCampo($("#date").val(), 'data')) {            
        return false;
    }
                    
    $.ajax({
        url: "/controller/UsuarioController.php",
        type: "POST",
        data: {
            tipo: "salvar",
            nome:     $("#nome").val(),
            email:    $("#email").val(),
            situacao: $("#situacao").val(),
            date:     $("#date").val()
        },
        success:function(data){                
            data = JSON.parse(data);
            table.row.add([
                data[1].toUpperCase(),
                data[2].toUpperCase(),
                "<span class=" + data[3].toLowerCase() + ">" + data[3].toUpperCase() + "</span>",
                new Date(data[4] + " 00:00:00").toLocaleDateString(),
                "<div class='acoes'> <div class='acao-deletar' onclick='deletar(" + data[0] + ")'> <i class='fa fa-trash'></i> </div> <div class='acao-editar' onclick='editar(" + data[0] + ")'> <i class='fa fa-pencil'></i> </div> <div class='acao-visualizar' onclick='visualizar(" + data[0] + ")'> <i class='fa fa-eye'></i> </div> </div>",
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

// tras os dados iniciais da tabela
function carregaDadosTabela() {
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

// funcao para delecao dos usuarios
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