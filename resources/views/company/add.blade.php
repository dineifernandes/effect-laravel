@extends('template')

@section('title', 'Início')
@section('page-name', 'Empresa')

@section('content')

    <div class="card mb-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Controle de Empresa</h6>
            <form method="post" action="{{route('company.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Razão Social</label>
                            <input type="text" class="form-control" id="razao_social" name="razao_social">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Slogan</label>
                            <input type="text" class="form-control" id="slogan" name="slogan">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">História</label>
                            <textarea name="historia" id="historia" rows="5" class="form-control"></textarea>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Propósito</label>
                            <textarea class="form-control" id="proposito" name="proposito"></textarea>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Missão</label>
                            <textarea class="form-control" id="missao" name="missao"></textarea>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Visão</label>
                            <textarea class="form-control" id="visao" name="visao"></textarea>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Valores</label>
                            <textarea class="form-control" id="valores" name="valores"></textarea>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Link Vídeo Institucional</label>
                            <input type="text" class="form-control" id="video_institucional" name="video_institucional">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="">Fotos da Empresa</label>
                        <div id="drop-area" class="drop-area">
                            <label for="fileInput"><p>Clique ou arraste e solte as imagens aqui</p></label>
                            <div id="image-preview"></div>
                        </div>
                        <input type="file" id="fileInput" name="fotos[]" multiple style="display: none;" accept="image/jpeg, image/png">
                    </div>
                </div>


                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="col-md-6">
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
                    </div>
                </div>






                <div class="d-flex flex-fill justify-content-end">
                    <a href="{{ route('company.index')  }}" class="btn btn-outline-dark btn-icon me-2" data-bs-toggle="tooltip" title="Cancelar">
                        <i class="bi bi-arrow-left me-0"></i>  Voltar
                    </a>

                    <button class="btn btn-primary me-2"><i class="bi bi-plus"></i> Salvar</button>
                </div>

            </form>
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('css/style_images_company.css') }}">
    <script src="{{ asset('js/script_images_company.js') }}"></script>
@endsection
