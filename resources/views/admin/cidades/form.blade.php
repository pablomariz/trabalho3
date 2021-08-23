@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

         @if ($errors->any())   
        <div class="red-text">     
            <ul>               
                @foreach ($errors->all()  as $error)
                    <li>
                        {{$error}}
                    </li> 
                @endforeach 
            </ul>   
        </div>

        @endif

        <form action="{{$action}}" method="POST">
            @csrf
            @isset($cursos)
                @method('PUT')
            @endisset

            <div class="input-field">
                <input type="text" name="nome" id="nome" value="{{old('nome', $cursos->nome ?? '' )}}"required>
                <label for="nome">Nome</label>
            </div>

            <div class="input-field">
                <input type="number" name="valor" id="valor" value="{{old('valor', $cursos->valor ?? '' )}}" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any"
                required>
                <label for="valor">Valor</label>
            </div>

            <div class="input-field">
                <input type="date" name="data" id="data" value="{{old('data', $cursos->data ?? '' )}}">
                <label for="data">Data de Lançamento</label>
            </div>


            <div class="right-align">
                <a href="{{route('admin.cidades.listar')}}" class="btn-flat waves-effect">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">
                    Salvar
                </button>
            </div>

        </form>
    </section>

@endsection
