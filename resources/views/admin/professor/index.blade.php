@extends('admin.layout.app')

@section('section') <span class="fs-4 opacity-50"> Professor/a</span> @endsection

@section('button')
<a class="btn btn-laranja" href="{{ route('professor.create') }}"> <i class="bi bi-people-fill"></i> Novo Professor/a</a>
@endsection

@section('content')
<table class="table table-light table-striped table-hover table-responsive mt-3">
    <thead>
        <tr>
            <th scope="col" class="col-">Nome</th>
            <th scope="col" class="col-2 text-center">E-mail</th>
            <th scope="col" class="col-2 text-center">Telefone</th>
            <th scope="col" class="col-2 text-center">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($professores as $professor )
        <tr>
            <td>{{$professor->name}}</td>
            <td class="text-center">{{$professor->email}}</td>
            <td class="text-center"></td>
            <td class="justify-content-around d-flex text-center">

                <a href="{{ route('turma.edit', $professor->id) }}">
                    <button type="submit" class="btn btn-sm btn-laranja ">
                        <i class="bi bi-pencil-square fa-x"></i>
                        Editar
                    </button>
                </a>

                <form action="{{ route('turma.destroy', $professor->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Deseja realmente excluir?')">
                        <i class="bi bi-x-square"></i>
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection