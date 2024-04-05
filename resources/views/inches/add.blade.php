@extends('template')

@section('title', 'Início')
@section('page-name', 'Polegadas')

@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Controle de Polegadas</h6>
            <form class="row" method="post" action="{{route('inches.store')}}">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="ativo" name="status" checked
                                       class="form-check-input">
                                <label class="form-check-label" for="ativo">Ativo</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="inativo" name="status"
                                       class="form-check-input">
                                <label class="form-check-label"
                                       for="inativo">Inativo</label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="d-flex flex-fill justify-content-end">
                    <a href="{{ route('inches.index')  }}" class="btn btn-outline-dark btn-icon me-2" data-bs-toggle="tooltip" title="Cancelar">
                        <i class="bi bi-arrow-left me-0"></i>  Voltar
                    </a>

                    <button class="btn btn-primary me-2"><i class="bi bi-plus"></i> Salvar</button>
                </div>

            </form>
        </div>
    </div>
@endsection
