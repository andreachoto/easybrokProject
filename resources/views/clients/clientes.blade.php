@extends('templates.admin_tpl')
@section('content')   
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">Clientes</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning">
            Chic@s, <br />
            Entorno para gestion de clientes <br />
            <br />
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
            <br />
        </div>
    </div>
</div>
@stop