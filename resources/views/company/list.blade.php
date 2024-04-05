@extends('template')

@section('title', 'Empresas')
@section('page-name', 'Empresas')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-md-flex gap-4 align-items-center">
                <div class="d-none d-md-flex">Buscar: </div>
                <div class="d-md-flex gap-4 align-items-center">
                    <form class="mb-3 mb-md-0">
                        <div class="row g-3">

                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Procurar">
                                    <button class="btn btn-outline-light" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="dropdown ms-auto">
                <a href="{{route('company.create')}}" class="btn btn-link btn-icon">
                    <i class="bi bi-plus-circle"></i> Novo
                </a>
                    <a href="#" data-bs-toggle="dropdown"
                       class="btn btn-link dropdown-toggle"
                       aria-haspopup="true" aria-expanded="false">Ação</a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item">PDF</a>
                        <a href="#" class="dropdown-item">Excel</a>
                        <a href="#" class="dropdown-item">Imprimir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table id="users" class="table table-custom table-lg">
            <thead>
            <tr>
                <th>
                    <input class="form-check-input select-all" type="checkbox" data-select-all-target="#users"
                           id="defaultCheck1">
                </th>
                <th>Id</th>
                <th>Nome</th>
                <th>Razão Social</th>
                <th>Missão</th>
                <th>Visão</th>
                <th>Valores</th>
                <th>Cadastro</th>
                <th>Update</th>
                <th>Status</th>
                <th class="text-center">#</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>1</td>
                <td> <a href="#">
                        <figure class="avatar me-3">
                            <img src="../images/user/man_avatar3.jpg"
                                 class="rounded-circle" alt="avatar">
                        </figure>
                        Hillery Ovenell
                    </a></td>
                <td>Razão Social</td>
                <td>Missão</td>
                <td>Visão</td>
                <td>Valores</td>
                <td>10/10/2024 07:02:00</td>
                <td>12/10/2024 10:32:00</td>
                <td>
                    <span class="badge bg-danger">Inativo</span>
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>1</td>
                <td> <a href="#">
                        <figure class="avatar me-3">
                            <img src="../images/user/man_avatar3.jpg"
                                 class="rounded-circle" alt="avatar">
                        </figure>
                        Hillery Ovenell
                    </a></td>
                <td>Razão Social</td>
                <td>Missão</td>
                <td>Visão</td>
                <td>Valores</td>
                <td>10/10/2024 07:02:00</td>
                <td>12/10/2024 10:32:00</td>
                <td>
                    <span class="badge bg-success">Ativo</span>
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>


    <nav class="mt-4" aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>


@endsection
