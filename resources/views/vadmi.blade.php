@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col">
        <table class="table table-striped table-bordered table-hover table-dark">
                <tr class='tabla_prin'>
                    <th class='tabla_cuadro'>Nro</th>
                    <th class='tabla_cuadro'>Nombre</th>
                    <th class='tabla_cuadro'>email</th>
                    <th class='tabla_cuadro'>cargo</th>
                    
         
                    <th class='tabla_cuadro'>&nbsp;</th>
                </tr>
            <?php $contador = 0?>
            @foreach($user as $usuario)
                    <?php $contador++ ?>
                    <tr>
                        <td class='tabla_celda'>{{$contador}}</td>
                        <td class='tabla_celda'>{{$usuario['name']}}</td>
                        <td class='tabla_celda'>{{$usuario['email']}}</td>
                        <td class='tabla_celda'>{{$usuario['cargo']}}</td>
            
                   
                            
                    </tr>
            @endforeach
            </table>
        </div>
           
        </div>
    </div>
@endsection