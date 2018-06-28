@extends('layout.site')
@section('conteudo')
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Cursos</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{url('form_curso')}}" class="btn btn-success">Adicionar curso</a>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-right">
                                    <a href="{{ route('edit.form_curso', $curso->id) }}" class="btn btn-default btn-xs">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </a>
                                    <a href="{{ route('excluir', $aluno->id) }}" class="btn btn-default btn-xs">
                                        <span class="glyphicon glyphicon-plus"></span>
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
                    @if(!$cursos->isEmpty())
                        {{$cursos->links}}
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Cursos</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{url('form_aluno')}}" class="btn btn-success">Adicionar aluno</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Codigo do curso</th>
                            <th>Aluno</th>
                            <th>Matricula</th>
                            <th>Semestre</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($alunos as $aluno)
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="text-right">
                                    <a href="{{ route('edit.form_aluno', $aluno->id) }}" class="btn btn-default btn-xs">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </a>
                                    <a href="{{ route('excluir', $aluno->id) }}" class="btn btn-default btn-xs">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Nenhum dado encontrado!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    @if(!$alunos->isEmpty())
                        {{$alunos->links}}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection