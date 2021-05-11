@extends('layouts.head')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Lista dos Usuários</h1>
    <p class="mb-4">Todos os usuários cadastrados no sistema.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('user_create') }}" class="btn btn-primary btn-icon-split btn-sm">
                <span class="icon text-white-50">
                    <i class="fa fa-plus"></i>
                </span>
                <span class="text">Adicionar Usuário</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Cpf</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($users) > 0)
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->cpf}}</td>
                                <td class="text-center">
                                    <a href="{{ route('user_edit', ['id' => $user->id]) }}" class="btn btn-info btn-circle btn-sm" title="Editar">
                                        <i class="fas fa-fw fa-wrench"></i>
                                    </a>
                                    &nbsp;
                                    <a href="{{ route('user_destroy', ['id' => $user->id]) }}" class="btn btn-danger btn-circle btn-sm" title="Apagar">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="6">Nenhuma informação encontrada!</td>
                            </tr>
                            @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
