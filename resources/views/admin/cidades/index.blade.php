@extends('admin.layouts.principal')
@section('conteudo-principal')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <section class=section>
        <table class=striped>
            <thead>
                <tr>
                    <th>Nome do Curso</th>
                    <th>Valor</th>
                    <th>Data de Lançamento</th>
                    <th>Opções</th>
                </tr>

            </thead>
            <tbody>
                @forelse ($cidades as $cidade)
                    <tr>
                        <td>{{ $cidade->nome }}</td>
                        <td>{{ $cidade->valor }}</td>
                        <td>{{ $cidade->data }}</td>
                        <td class="right-align">

                            <a href="{{route('admin.cidades.formEditar', $cidade->id)}}">
                                <span>
                                    <i class="material-icons blue-text text-accent-2">edit</i>
                                </span>
                            </a>

                            <form action="{{ route('admin.cidades.deletar', $cidade->id) }}" method="POST">
                                @CSRF
                                @method('DELETE')
                                <button style="border:0;background:transparent" type="submit">
                                    <span>
                                        <i class="material-icons red-text">delete_forever</i>
                                    </span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty

                @endforelse
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{ route('admin.cidades.form') }}">
                <i class="large material-icons">
                    add
                </i>
            </a>
        </div>
        
        @if (session('sucesso'))
            <div class="alert alert-success">
                {{ session('sucesso') }}
            </div>

        @endif
    </section>

@endsection
@section('secundário')
<p></p>
@endsection
