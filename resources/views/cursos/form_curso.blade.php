@extends('layout.site')
@section('conteudo')
    {{ Form::open(['method'=>'POST','id'=>'form_curso']) }}
    {{--{{ Form::hidden('id_aluno', 1,['id'=>'id_aluno']) }}--}}
    <div class="form-row">
        <div class="form-group col-sm-6">
            {{ Form::label('cod_curso', 'Código do curso') }}
            {{ Form::number('cod_curso', ['class'=>'form-control', 'id'=>'cod_curso', 'autofocus', 'required','placeholder'=>'Código do curso]) }}
        </div>
        <div class="form-group col-sm-6">
            {{ Form::label('nome_curso', 'Nome do curso') }}
            {{ Form::text('nome_curso', ['class'=>'form-control', 'id'=>'nome_curso', 'autofocus', 'required','placeholder'=>'Nome do curso']) }}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            {{ Form::label('instituicao_ensino', 'Instituição de ensino') }}
            {{ Form::text('instituicao_ensino', ['class'=>'form-control', 'id'=>'instituicao_ensino', 'autofocus', 'required','placeholder'=>'Instituição de ensino']) }}
        </div>
    </div>s
    <button type="submit" class="btn btn-primary">Salvar</button>
    {{ Form::close() }}

    <script>
        $("#form_curso").submit(function (e) {
            e.preventDefault();
            var formData = $("#form_curso").serialize();
            $.ajax({
                url: 'create/curso',
                type: 'POST',
                dataType: 'json',
                data: formData,
                success: function (data) {
                    alert(data.message);
                    window.location = data.redirect_to;
                },
                error: function (data) {
                    var erros = data.responseJSON.errors;
                    // $('.invalid-tooltip').hide();
                    // $('.invalidar-campo').removeClass('invalidar-campo');
                    // $.each(erros, function (iddiv, value) {
                    //     $('#erro-' + iddiv).html(value);
                    //     $('#' + iddiv).addClass('invalidar-campo');
                    //     $('#erro-' + iddiv).show();
                    // });
                    $("#form_register").addClass('was-validated');
                }
            });
        });

    </script>
@endsection

