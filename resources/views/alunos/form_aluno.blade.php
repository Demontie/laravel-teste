@extends('layout.site')
@section('conteudo')
{{ Form::open(['method'=>'POST','id'=>'form_aluno']) }}
{{--{{ Form::hidden('id_aluno', 1,['id'=>'id_aluno']) }}--}}
    <div class="form-row">
        <div class="form-group col-sm-6">
            {{ Form::label('nome_aluno', 'Nome completo') }}
            {{ Form::text('nome_aluno', ['class'=>'form-control', 'id'=>'nome_aluno', 'autofocus', 'required','placeholder'=>'Nome completo']) }}
        </div>
        <div class="form-group col-sm-6">
            {{ Form::label('numero_maricula', 'Número da matricula') }}
            {{ Form::number('numero_maricula', ['class'=>'form-control', 'id'=>'numero_maricula', 'autofocus', 'required','placeholder'=>'Número da matricula']) }}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            {{ Form::label('semestre', 'Semestre') }}
            {{ Form::number('semestre', ['class'=>'form-control', 'id'=>'semestre', 'autofocus', 'required','placeholder'=>'Semestre']) }}
        </div>
        <div class="form-group col-sm-6">
            {{ Form::label('numero_maricula', 'Número da matricula') }}
            {{ Form::number('numero_maricula', ['class'=>'form-control', 'id'=>'numero_maricula', 'autofocus', 'required','placeholder'=>'Número da matricula']) }}
        </div>

        <div class="form-group col-sm-6">
            {{ Form::label('numero_maricula', 'Número da matricula') }}
            {{ Form::select('status', array('matriculado'=>'Matriculado','trancado'=>'Trancado','jubilado'=>'Jubilado'),['class'=>'form-control','id'=>'status']) }}
        </div>

        <div class="form-group col-sm-6">
            {{ Form::label('numero_maricula', 'Número da matricula') }}
            {{ Form::select('status', array('matriculado'=>'Matriculado','trancado'=>'Trancado','jubilado'=>'Jubilado'),['class'=>'form-control','id'=>'status']) }}
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
{{ Form::close() }}
@endsection
{{--<script>--}}
    {{--$("#form_register").submit(function (e) {--}}
        {{--e.preventDefault();--}}
        {{--var formData = $("#form_register").serialize();--}}
{{--//'url' => route('cliente.cadastro'),--}}
        {{--$.ajax({--}}
            {{--url: 'cliente/cadastro',--}}
            {{--type: 'POST',--}}
            {{--dataType: 'json',--}}
            {{--data: formData,--}}
            {{--success: function (data) {--}}
                {{--$('.invalid-tooltip').hide();--}}
                {{--$('.invalidar-campo').removeClass('invalidar-campo');--}}
                {{--alert(data.message);--}}
                {{--window.location = data.redirect_to;--}}
            {{--},--}}
            {{--error: function (data) {--}}
                {{--var erros = data.responseJSON.errors;--}}
                {{--$('.invalid-tooltip').hide();--}}
                {{--$('.invalidar-campo').removeClass('invalidar-campo');--}}
                {{--$.each(erros, function (iddiv, value) {--}}
                    {{--$('#erro-' + iddiv).html(value);--}}
                    {{--$('#' + iddiv).addClass('invalidar-campo');--}}
                    {{--$('#erro-' + iddiv).show();--}}
                {{--});--}}
                {{--$("#form_register").addClass('was-validated');--}}
            {{--}--}}
        {{--});--}}
    {{--});--}}

{{--</script>--}}
