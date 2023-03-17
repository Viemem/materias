<br>
<label for="Asignatura"> Asignatura </label>
<input type="text" name="Asignatura" value="{{ isset($infos->Asignatura)?$infos->Asignatura:'' }}" id="Asignatura">
<br>
<label for="Actividad1"> Actividad1 </label>
<input type="text" name="Actividad1" value="{{ isset($infos->Actividad1)?$infos->Actividad1:'' }}" id="Actividad1">
<br>
<label for="CalificaciónAct1"> CalificaciónAct1 </label>
<input type="text" name="CalificaciónAct1" value="{{ isset($infos->CalificaciónAct1)?$infos->CalificaciónAct1:'' }}" id="CalificaciónAct1">
<br>
<label for="Actividad2"> Actividad2 </label>
<input type="text" name="Actividad2" value="{{ isset($infos->Actividad2)?$infos->Actividad2:'' }}" id="Actividad2">
<br>
<label for="CalificaciónAct2"> CalificaciónAct2 </label>
<input type="text" name="CalificaciónAct2" value="{{ isset($infos->CalificaciónAct2)?$infos->CalificaciónAct2:''}}" id="CalificaciónAct2">
<br>
<input type="submit" value="Guardar datos de calificaciones">

<a href="{{ url('datos/') }}">Regresar a los registros</a>

<br>