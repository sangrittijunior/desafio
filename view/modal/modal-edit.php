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