Formulario para la creación de asignaturas.

<form action="{{ url('/datos') }}" method="post">
@csrf
@include('datos.form');


</form>