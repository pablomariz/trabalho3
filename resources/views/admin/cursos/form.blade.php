@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">


        <form action="{{$action}}" method="POST">

            <div class="input-field">
                <input type="text" name="nome" id="nome" value="{{old('nome', $cursos->nome ?? '' )}}"required>
                <label for="nome">Nome</label>
            </div>

        </form>
        
    </section>

@endsection
