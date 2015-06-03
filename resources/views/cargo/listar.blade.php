@extends('templates.admin_tpl')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Cargos</div>
                <div class="panel-body">

                    <table border="0" cellspacing="1" cellpadding="0" width="100%">
                        <tr><td>Nombre</td> <td>Creación</td><td>Usuario</td><td>Estado</td> </tr>
                        @foreach($cargos as $cargo)
                        <tr>
                            <td>{{$cargo->NOMBRE}}</td>
                            <td>{{$cargo->CREACION}}</td>
                            <td>{{$cargo->USUARIOCREACION}}</td> 
                            <td>{{$cargo->ESTADO}}</td>
                            <td>{{$cargo->id}}</td>
                            <td> <a href="../cargos/{{$cargo->id}}/edit" class="btn btn-warning"> Editar</a>                  </td>
                            <td> <a href="·" class="btn btn-warning"> Visualizar</a></td>
                            <td>
                                {!!Form ::model($cargos,['method'=>'DELETE','route'=>['cargos.destroy',$cargo->id] ])!!} 
                                {!! Form:: submit('Eliminar',['class'=>'btn btn-warning form-control'])!!}
                                {!! Form:: close()!!}

                            </td>


                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection













<!--@section('mensajes')
            <label>Este es el area de mensajes</label>
@endsection-->



