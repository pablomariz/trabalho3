@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect wave-light" href="{{Route('admin.cursos.create')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>
    </section>

@endsection