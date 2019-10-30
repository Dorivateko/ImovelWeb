@extends('adminlte::page')

@section('title', 'ImovelTTé')

@section('content_header')
    <h1><i class="fas fafx fa-bars"></i> listagem de corretores</h1>
@stop

@section('content')
    <div class="panel panel-default">
            <div class="panel-heading clearfix">
            Relação de corretores cadastrados
                <div class="pull-right">
                    <a href="#" class="btn btn-info"><i class="fa fa-fx fa-sync-alt"></i> atualizar a tela</a>
                    <a href="#" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir novo registro</a>
                </div>   
        
            </div>

        <div class="panel-body">
            <table id="table-corretores" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                    
                        <th>ID</th>
                        <th>Nome do corretor</th>
                        <th>telefone</td>
                        <th>e-mail</th>
                        <th>ações</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach($corretores as $corretor)
                        <tr> 
                            <td>{{ $corretor->id }}</td>
                            <td>{{ $corretor-> nome }}</td>
                            <td>{{ $corretor->fone }}</td>
                            <td>{{ $corretor->email }}</td>
                            <td>
                            <!-- botao de vizualizacao -->
                                <a href="#" class= "btn btn-xs btn-primary">
                                <i class= "fas fa-fx fa-eye"></i>
                                </a>
                                <!-- botao de Alteração -->

                                <a href="#" class="btn btn-xs btn-warning">
                                
                                <i class="fas fa-fx fa-pencil-alt"></i>
                                </a>
                               
                                <!-- botao de exclusao -->
                                <form action="#" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-xs btn-danger"><i class="fas fa-fx fa-trash-alt"></i></button>
                                </form>




                            </td>

                        </tr>
                       @endforeach
                    </tbody>    
                
            </table>
        
        </div>

        <div class="panel panel-footer">
            teste rodape
        </div>
    </div>

   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
$(document).ready(function() {
$('#table-corretores').DataTable({
language: {
url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
},
});
});
</script>
@stop