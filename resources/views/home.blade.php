@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Projetos</div>

                <div class="card-body">
                    {{$projects}}
                    {{$errors}}
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Adicionar Projeto</div>
                <div class="card-body">
                    <form action="/projects" method="POST">
                        @csrf
                        <div class="form-group">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Título" value="{{old('title')}}" required>
                            @if ($errors->has('title'))
                            <small class="form-text text-muted" style="color:#ef5350!important">{{ $errors->first('title') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" name="description" id="description" placeholder="Descrição (Opcional)">{{old('description')}}</textarea>
                            @if ($errors->has('description'))
                            <small class="form-text text-muted" style="color:#ef5350!important">{{ $errors->first('description') }}</small>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $("small").on("click", function () {
        alert("On click");
    });
</script>

@endsection
