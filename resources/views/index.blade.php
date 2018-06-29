@extends('layout.site')
@section('conteudo')

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Cursos</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{url('/cursos/create')}}" class="btn btn-success">Adicionar curso</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Codigo do curso</th>
                            <th>Curso</th>
                            <th>Instituição de ensino</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($cursos as $curso)
                            <tr>
                                <td>{{$curso->cod_curso}}</td>
                                <td>{{$curso->nome_curso}}</td>
                                <td>{{$curso->instituicao_ensino}}</td>
                                <td class="text-right">
                                    <a href="{{ url('/cursos/{id}/edit', $curso->id) }}" class="btn btn-success btn-xs">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ url('/cursos/{id}', $curso->id) }}" class="btn btn-danger btn-xs">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Nenhum dado encontrado!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{--@if(!$cursos->isEmpty())--}}
                        {{--{{$cursos->links}}--}}
                    {{--@endif--}}
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Alunos</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{url('/alunos/create')}}" class="btn btn-success">Adicionar aluno</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Aluno</th>
                            <th>Matricula</th>
                            <th>Semestre</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($alunos as $aluno)
                            <tr>
                                <td>{{$aluno->cursos->first()->nome_curso}}</td>
                                <td>{{$aluno->nome_aluno}}</td>
                                <td>{{$aluno->numero_maricula}}</td>
                                <td>{{$aluno->semestre}}</td>
                                <td>{{$aluno->status}}</td>
                                <td class="text-right">
                                    <a href="{{ url('/alunos/{id}/edit', $aluno->id) }}" class="btn btn-success btn-xs">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ url('/alunos/{id}', $aluno->id) }}" class="btn btn-danger btn-xs">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Nenhum dado encontrado!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{--@if(!$alunos->isEmpty())--}}
                        {{--{{$alunos->links}}--}}
                    {{--@endif--}}
                </div>
            </div>
        </div>
    </div>
@endsection