@extends('admin.layout.app')

@section('section') <span class="fs-4 opacity-50"> Turma</span> / <span class="text-laranja-2">@if(isset($uses))Editar{{$uses->name}} @else Novo @endif</span> @endsection

@section('content')

<div class="container-fluid">
    <div class="row  mycard shadow-sm">

        <div class="row">
            <div class="col-12">
                <h5 class="text-laranja">@if(isset($aluno)) Editar Turma @else Cadastra de Turma @endif</h5>
                <span class="opacity-75">Mussum Ipsum, cacilds vidis litro abertis. Mauris nec dolor in eros commodo tempor.</span>
            </div>
        </div>
        <div class="row">
            @if(isset($aluno))
            <form action="{{ route('aluno.update', $aluno->id) }}" method="POST" class="row mt-4">
                @method('PUT')
                @else
                <form action="{{ route('aluno.store') }}" method="POST" class="row mt-4">
                    @method('POST')
                    @endif
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <label for="" class="form-label">Turma</label>
                            <select name="id_responsavel" value="{{$aluno->id_responsavel ?? ''}}" class="form-control @error('id_responsavel') is-invalid @enderror">
                                <option @if(isset($aluno->id_responsavel) &&$aluno->id_responsavel == '') selected @endif >Escolha...</option>
                                <option value="1" @if(isset($aluno->id_responsavel) && $aluno->id_responsavel == '1') selected @endif >111</option>
                            </select>
                            @error('id_responsavel')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Turno</label>
                            <select name="id_responsavel" value="{{$aluno->id_responsavel ?? ''}}" class="form-control @error('id_responsavel') is-invalid @enderror">
                                <option @if(isset($aluno->id_responsavel) &&$aluno->id_responsavel == '') selected @endif >Escolha...</option>
                                <option value="1" @if(isset($aluno->id_responsavel) && $aluno->id_responsavel == '1') selected @endif >111</option>
                            </select>
                            @error('id_responsavel')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="clear"></div>
                        <div class="col-3">
                            <label for="" class="form-label">Nome</label>
                            <input type="text" name="nome" value="{{$aluno->nome ?? ''}}" class="form-control @error('nome') is-invalid @enderror" />
                            @error('nome')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">CPF</label>
                            <input type="text" name="cpf" value="{{$aluno->cpf ?? ''}}" class="form-control @error('cpf') is-invalid @enderror" />
                            @error('cpf')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                    </div>

                    <hr class="my-4">

                    <div class="row mt-3">
                        <div class="col-12">
                            <button type="submit" class="btn btn-laranja">@if(isset($aluno)) Atualizar @else Cadastrar @endif</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>

@endsection