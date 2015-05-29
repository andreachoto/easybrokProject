@extends('templates.admin_tpl')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Administración Cargos</div>
                <div class="panel-body">

                    <table border="0" cellspacing="1" cellpadding="0" width="100%">

                        {!!Form ::open(['url'=>'guardar'])!!} 
                        <div class="form-group">
                            {!! Form:: label('nombre','Nombre:')!!}
                            {!! Form:: text('NOMBRE',null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form:: label('creacion','Creacion:')!!}
                            {!! Form:: text('CREACION',null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form:: label('usuario','Uusario Creador:')!!}
                            {!! Form:: text('USUARIOCREACION',null,['class'=>'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form:: label('estado','Estado Cargo:')!!}
                            {!! Form:: text('ESTADO',null,['class'=>'form-control'])!!}
                        </div>
                        
                        
                        <div class="form-group">
                            {!! Form:: submit('guardar',['class'=>'btn btn-primary form-control'])!!}
                        </div>


                        {!! Form:: close()!!}
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



