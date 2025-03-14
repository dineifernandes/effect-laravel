@extends('template')

@section('title', 'Início')
@section('page-name', 'Usuário')

@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Controle de Usuário</h6>
            <form class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Senha</label>
                        <input type="password" class="form-control" value="12345678">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Sexo</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="inlineRadio1" name="inlineRadio"
                                       class="form-check-input">
                                <label class="form-check-label" for="inlineRadio1">Masculino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="inlineRadio2" name="inlineRadio"
                                       class="form-check-input">
                                <label class="form-check-label"
                                       for="inlineRadio2">Feminino</label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="d-flex flex-fill justify-content-end">
                    <a href="{{ route('user.index')  }}" class="btn btn-outline-dark btn-icon me-2" data-bs-toggle="tooltip" title="Cancelar">
                        <i class="bi bi-arrow-left me-0"></i>  Voltar
                    </a>

                    <button class="btn btn-primary me-2"><i class="bi bi-plus"></i> Salvar</button>
                </div>

            </form>
        </div>
    </div>
@endsection
