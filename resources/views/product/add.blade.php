@extends('template')

@section('title', 'Produto')
@section('page-name', 'Produto')

@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Controle de Produto</h6>
            <form method="post" action="{{route('product.store')}}">

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Categoria</label>
                            <select class="form-control" id="categoria_id" name="categoria_id">
                                <option value="#">Selecione uma categoria</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Empresa</label>
                            <select class="form-control" id="empresa_id" name="empresa_id">
                                <option value="#">Selecione uma empresa</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Lançamento</label>
                            <input type="datetime-local" class="form-control" id="data_lancamento" name="data_lancamento">
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <textarea class="form-control" id="descricao" name="descricao"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                            <label class="form-label">Site</label>
                            <input type="url" class="form-control" id="site" name="site">
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Possui Iluminação</label>
                            <select class="form-control" id="empresa_id" name="empresa_id">
                                <option value="#">Selecione</option>
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Peso</label>
                            <input type="text" class="form-control" id="peso" name="peso">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Profundidade</label>
                            <input type="text" class="form-control" id="profundidade" name="profundidade">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Largura</label>
                            <input type="text" class="form-control" id="largura" name="largura">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Altura</label>
                            <input type="text" class="form-control" id="altura" name="altura">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Preço ponta</label>
                            <input type="text" class="form-control" id="preco_ponta" name="preco_ponta">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Preço Kg</label>
                            <input type="text" class="form-control" id="preco_kg" name="preco_kg">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Polegadas</label>
                            <select class="form-control" id="polegada_id" name="polegada_id">
                                <option value="#">Selecione</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Matéria Prima</label>
                            <select class="form-control" id="materiaprima_id" name="materiaprima_id">
                                <option value="#">Selecione</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Material Acessório</label>
                            <select class="form-control" id="materialacessorio_id" name="materialacessorio_id">
                                <option value="#">Selecione</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Link Google</label>
                            <input type="text" class="form-control" id="link_google" name="link_google">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Link vídeo</label>
                            <input type="text" class="form-control" id="link_video" name="link_video">
                        </div>
                    </div>
                </div>



                <fieldset class="scheduler-border mt-3">
                    <legend class="scheduler-border mb-3">Sobre as Gavetas</legend>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Quantidade</label>
                                <select class="form-control" id="quantidade_gaveta" name="quantidade_gaveta">
                                    <option value="0">Nenhuma</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Material</label>
                                <select class="form-control" id="material_gaveta" name="material_gaveta">
                                    <option value="#">Selecione</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Tipo Corrediça</label>
                                <select class="form-control" id="tipo_corredica_gaveta" name="tipo_corredica_gaveta">
                                    <option value="#">Selecione</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </fieldset>

                <fieldset class="scheduler-border mt-5">
                    <legend class="scheduler-border mb-3">Sobre as Portas</legend>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Quantidade</label>
                                <select class="form-control" id="quantidade_portas" name="quantidade_portas">
                                    <option value="0">Nenhuma</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Material</label>
                                <select class="form-control" id="material_portas" name="material_portas">
                                    <option value="#">Selecione</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Tipo Dobradiça</label>
                                <select class="form-control" id="tipo_dobradica_porta" name="tipo_dobradica_porta">
                                    <option value="#">Selecione</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Tipo Corrediça</label>
                                <select class="form-control" id="tipo_corredica_porta" name="tipo_corredica_porta">
                                    <option value="#">Selecione</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </fieldset>

                <fieldset class="scheduler-border mt-5">
                    <legend class="scheduler-border mb-3">Sobre as Prateleiras</legend>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Quantidade</label>
                                <select class="form-control" id="quantidade_prateleiras" name="quantidade_prateleiras">
                                    <option value="0">Nenhuma</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Material</label>
                                <select class="form-control" id="material_prateleiras" name="material_prateleiras">
                                    <option value="#">Selecione</option>
                                </select>
                            </div>
                        </div>

                    </div>

                </fieldset>

                <div class="row mt-3">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Qtd. Nicho</label>
                            <input type="text" class="form-control" id="quantidade_nicho" name="quantidade_nicho">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Possui rodízio</label>
                            <select class="form-control" id="possui_rodizio" name="possui_rodizio">
                                <option value="#">Selecione</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Material rodízio</label>
                            <select class="form-control" id="material_rodizio" name="material_rodizio">
                                <option value="#">Selecione</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Qtd. Pés</label>
                            <input type="text" class="form-control" id="quantidade_pes" name="quantidade_pes">
                        </div>
                    </div>
                </div>



                <fieldset class="scheduler-border mt-3">
                    <legend class="scheduler-border mb-3">SKUs</legend>
                    <div id="skus-container">
                        <div class="row sku-row">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <select class="form-control" name="quantidade_gaveta">
                                        <option value="#">Selecione um SKU</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="mb-3">
                                    <input type="file" name="foto_sku" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label class="form-label"></label>
                                    <a class="btn btn-success add" onclick="addRow(this)"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>


                <div class="d-flex flex-fill justify-content-end mt-3">
                    <a href="{{ route('product.index')  }}" class="btn btn-outline-dark btn-icon me-2" data-bs-toggle="tooltip" title="Cancelar">
                        <i class="bi bi-arrow-left me-0"></i>  Voltar
                    </a>

                    <button class="btn btn-primary me-2"><i class="bi bi-plus"></i> Salvar</button>
                </div>

            </form>
        </div>
    </div>
    <script>
        function addRow(button) {
            // Clone a linha existente
            const clone = button.closest('.sku-row').cloneNode(true);
            // Modifica o botão na nova linha para ser um botão de remoção
            const removeButton = clone.querySelector('.add');
            removeButton.innerHTML = '<i class="bi bi-trash"></i>';
            removeButton.classList.remove('btn-success');
            removeButton.classList.add('btn-danger');
            removeButton.onclick = function() {
                removeRow(this);
            };
            // Adiciona a nova linha ao contêiner
            document.getElementById('skus-container').appendChild(clone);
        }

        function removeRow(button) {
            // Obtém o elemento pai do botão de remoção (a tag <a>)
            const row = button.closest('.sku-row');

            // Remove a linha do DOM
            row.remove();
        }
    </script>
@endsection
