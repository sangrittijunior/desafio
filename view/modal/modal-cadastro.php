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