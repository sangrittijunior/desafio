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