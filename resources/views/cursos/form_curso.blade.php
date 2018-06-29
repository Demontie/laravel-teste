@extends('layout.site')
@section('conteudo')

    <form method="POST" id="form_curso" action="{{url('cursos')}}">
        {{ csrf_field() }}
        {{--{{ Form::hidden('id_aluno', 1,['id'=>'id_aluno']) }}--}}
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label for="cod_curso">Código do curso</label>
            <input type="number" id="cod_curso" name="cod_curso" class="form-control" required placeholder="Código do curso">
        </div>
        <div class="form-group col-sm-6">
            <label for="nome_curso">Nome do curso</label>
            <input type="text" id="nome_curso" name="nome_curso" class="form-control" required placeholder="Nome do curso">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label for="instituicao_ensino">Instituição de ensino</label>
            <input type="text" id="instituicao_ensino" name="instituicao_ensino" class="form-control" required placeholder="Instituição de ensino">
        </div>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection

