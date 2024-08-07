@extends('admin.layout.app')

@section('section') <span class="fs-4 opacity-50"> Professor/a</span> / @if(isset($uses))<span class="text-laranja">Editar</span> {{$uses->name}} @else Novo @endif @endsection

@section('content')

<div class="container-fluid">
    <div class="row  mycard shadow-sm">

        <div class="row">
            <div class="col-12">
                <h5 class="text-laranja">@if(isset($uses)) Editar o Professor/a @else Professor/a @endif</h5>
            </div>
        </div>

        @if(isset($uses))
        <form action="{{ route('professor.update', $uses->id) }}" method="POST" class="mt-1">
            @method('PUT')
            @else
            <form action="{{ route('professor.store') }}" method="POST" class="mt-1">
                @method('POST')
                @endif
                @csrf
                <div id="form-responsavel">
                    <div class="row">
                        <div class="col-3">
                            <label for="" class="form-label">Nome</label>
                            <input type="text" name="name" value="{{$uses->name ?? ''}}" class="form-control @error('name') is-invalid @enderror" />
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">CPF</label>
                            <input type="text" name="cpf" value="{{$uses->cpf ?? ''}}" x-mask="99/99/9999" x-mask="999.999.999-99" max="11" placeholder="999.999.999-99" class="form-control @error('cpf') is-invalid @enderror" />
                            @error('cpf')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">RG</label>
                            <input type="date" name="rg" value="{{$uses->rg ?? ''}}" class="form-control @error('rg') is-invalid @enderror" />
                            @error('rg')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Data de Nascimento</label>
                            <input type="date" name="dt_nascimento" value="{{$uses->dt_nascimento ?? ''}}" class="form-control @error('dt_nascimento') is-invalid @enderror" />
                            @error('dt_nascimento')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Sexo</label>
                            <select class="form-select @error('sexo') is-invalid @enderror" name="sexo">
                                <option value="" @if(isset($uses) && $uses->sexo == '' )selected @endif>Escolha...</option>
                                <option value="M" @if(isset($uses) && $uses->sexo == 'M')selected @endif >Masculino</option>
                                <option value="F" @if(isset($uses) && $uses->sexo == 'F')selected @endif>Feminino</option>
                            </select>
                            @error('sexo')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Telefone</label>
                            <input type="text" name="telefone" value="{{$uses->telefone ?? ''}}" class="form-control @error('telefone') is-invalid @enderror" />
                            @error('telefone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="row">
                        <div class="col-3 col-sm-6 col-lg-3">
                            <label for="">Estado</label>
                            <input type="text" name="uf" value="{{$uses->uf ?? ''}}" class="form-control @error('uf') is-invalid @enderror" />
                            @error('uf')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3 col-sm-6 col-lg-3">
                            <label for="">Cidade</label>
                            <input type="text" name="cidade" value="{{$uses->cidade ?? ''}}" class="form-control @error('cidade') is-invalid @enderror" />
                            @error('cidade')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3 col-sm-6 col-lg-3">
                            <label for="">CEP</label>
                            <input type="text" name="cep" value="{{$uses->cep ?? ''}}" class="form-control @error('cep') is-invalid @enderror" />
                            @error('cep')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3 col-sm-6 col-lg-3">
                            <label for="">Rua</label>
                            <input type="text" name="rua" value="{{$uses->rua ?? ''}}" class="form-control @error('rua') is-invalid @enderror" />
                            @error('rua')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3 col-sm-6 col-lg-3">
                            <label for="">Complemento</label>
                            <input type="text" name="complemento" value="{{$uses->complemento ?? ''}}" class="form-control @error('complemento') is-invalid @enderror" />
                            @error('complemento')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3 col-sm-6 col-lg-3">
                            <label for="">Bairro</label>
                            <input type="text" name="bairro" value="{{$uses->bairro ?? ''}}" class="form-control @error('bairro') is-invalid @enderror" />
                            @error('bairro')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3 col-sm-6 col-lg-3 text-start align-content-center mt-3" id="exluir">
                        </div>
                    </div>
                </div>

                <hr class="my-3">

                <div class="row mt-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-laranja ">@if(isset($uses)) Atualizar @else Cadastrar @endif</button>
                    </div>
                </div>
            </form>
    </div>
</div>

<script src="{{ asset('js/responsavel.js') }}"></script>

@endsection