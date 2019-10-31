@extends('adminlte::page')

@section('title', 'ImovelTTE')

@section('content_header')
    <h1>Cadastramento de Corretores</h1>
@stop

@section('content')
    <form action="{{route('corretores.store')}}" method="post" enctype="multipart/form-data">
   {{csrf_field()}}
    <div class="panel panel-default">
        <div class="panel-heading">
        Informe os dados do corretor a ser cadastrado


        </div>

        <div class="panel-body">

            <div class="form-group">
            <label for="nome">Nome do corretor</label>
            <input type="text" name="nome" id="nome" class="form-control">
            </div>

            <div class="form-group">
            <label for="creci">creci</label>
            <input type="text" name="creci" id="creci" class="form-control">
            </div>
            
            <div class="form-group">
            <label for="fone">telefone </label>
            <input type="text" name="fone" id="fone" class="form-control">
            </div>
            
            <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" id="email" class="form-control">
            </div>

        
        </div>
        <div class='panel-footer'>
            <a href="{{route('corretores.index')}}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-success">Gravar</button>


        
        </div>
    
    </div>
    </form>








@stop

@section('css')
   
@stop

@section('js')
    
@stop