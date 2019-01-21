@extends('layouts.app')

@section('content')
    <form action="" method="post">
        {{ csrf_field()  }}
        <div class="container">
            <input type="text" name="title" class="form-control" placeholder="Título"/>
            <textarea name="body" class="form-control" placeholder="Mensage"></textarea>
            <input type="submit" value="Salvar" class="btn btn-primary">
        </div>
    </form>
@endsection
