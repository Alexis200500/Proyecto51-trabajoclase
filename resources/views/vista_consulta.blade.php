
<form action="{{ route('buscar')}}" method="GET">
Dame el criterio de busqueda
<input type="text" name="criterio">
<input type="submit" value="Buscar"><br><br>
</form>


<form action="{{ route('buscar2')}}" method="GET">
Carrera:         <select name="carrera">
                        <option value="1">TI DSM</option>
                        <option value="2">TI RT</option>
                        <option value="3">Mecatronica</option>
                        <option value="4">Enfermeria</option>
                        <option value="5">Mantenimiento Ind.</option>
                        <option value="6">Negocios</option>
                     </select><br>

<input type="submit" value="Buscar"><br><br>
</form>



<b>
<a href="{{ route('subir')}}">Importar archivo excel</a> <br>
</b>

<table border="1">
  <tr><th>ID</th><th>Nombre</th><th>Ap .Paterno</th><th>Ap .Materno</th><th>Carreras</th><th>Email</th><th>Sexo</th></tr>
  @foreach ($res as $res2)
  <tr>
    <td>{{$res2->idalumno}}</td>
    <td>{{$res2->nombre}}</td>
    <td>{{$res2->appaterno}}</td>
    <td>{{$res2->apmaterno}}</td>
    <td>{{$res2->carrera}}</td>
    <td>{{$res2->email}}</td>
    <td>{{$res2->sexo}}</td>
  @endforeach
  </tr>
</table>

@if (isset($crit))
<!--FORMATO PDF-->
<a href="{{route('pdf',['crit'=>$crit])}}">Generar PDF</a> <br>
@endif

<a href="{{route('sexof')}}">Generar Excel (Femenino)</a> <br>
<a href="{{route('sexom')}}">Generar Excel (Masculino)</a><br>

@if (isset($crit))
<a href="{{route('excelc',['crit'=>$crit])}}">
Generar Excel (con Criterio)</a><br>
@endif