Formulario para la edición de asignaturas.

<form action="{{ url('/datos/'.$infos->id) }}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('datos.form');

</form>