Mostrar la lista de asignaturas.

<a href="{{ url('datos/create') }}">Registrar una nueva asignatura</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Asignatura</th>
            <th>Actividad1</th>
            <th>CalificaciónAct1</th>
            <th>Actividad2</th>
            <th>CalificaciónAct2</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($info as $infos ) 
        <tr>
            <td>{{$infos->id}}</td>
            <td>{{$infos->Asignatura}}</td>
            <td>{{$infos->Actividad1}}</td>
            <td>{{$infos->CalificaciónAct1}}</td>
            <td>{{$infos->Actividad2}}</td>
            <td>{{$infos->CalificaciónAct2}}</td>
            <td>
                
            <a href="{{ url('/datos/'.$infos->id.'/edit') }}">
                 Editar Datos
            </a>
             | 
                
            <form action="{{url('/datos/'.$infos->id)}}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Deseas borrar la asignatura completa?')" 
            value="Borrar">

            </form>

        </td>
        </tr>
        @endforeach
    </tbody>
</table>