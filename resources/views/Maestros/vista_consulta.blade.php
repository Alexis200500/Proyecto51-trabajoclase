<h1>Reporte Maestros</h1>
<table border>
<tr>
<td>Id. Maestro</td>
<td>Nombre</td>
<td>Ap. Paterno</td>
<td>Ap. Materno</td>
<td>Carrera</td>
<td>Correo</td>
<td>Telefono</td>
<td>Horario</td>
</tr>
@foreach ($res as $m)
<tr>
<td>{{$m->idmaestro}}</td>
<td>{{$m->nombre}}</td>
<td>{{$m->appaterno}}</td>
<td>{{$m->apmaterno}}</td>
<td>{{$m->carrera}}</td>
<td>{{$m->email}}</td>
<td>{{$m->telefono}}</td>
<td>{{$m->horario}}</td>
@endforeach
</tr>
</table>

 <a href="{{route('PDFM')}}"> <img src="pdf2.png"  width="100" height="100">  </a> 


<a href="{{route('EXCELM')}}"> <img src="excel.jfif"  width="100" height="100"></a>