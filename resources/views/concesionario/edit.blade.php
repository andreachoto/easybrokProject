@extends('templates.admin_tpl')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
 <div class="panel panel-default">
                <div class="panel-heading">Listado de Concesionarios</div>
                <div class="panel-body">
                <?php echo $concesionario; ?>
                <table border="0" cellspacing="1" cellpadding="0" width="100%">
                 <tr><td>Nombre</td> <td>Creación</td><td>Usuario</td><td>Estado</td> </tr>
                 
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



