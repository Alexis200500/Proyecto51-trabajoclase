<h1>Reporte de Paises</h1>

<table border=1>
<tr>
<th>Nombre</th>
<th>Continente</th>
<th>Región</th>
<th>Población</th>
<th>Forma de Gobierno</th>
</tr>

@foreach ($res as $res1)
<tr>
<td>{{$res1->Name}}</td>
<td>{{$res1->Continent}}</td>
<td>{{$res1->Region}}</td>
<td>{{$res1->Population}}</td>
<td>{{$res1->GovernmentForm}}</td>
</tr>
@endforeach
</table>


<a href="{{route('pdfexamen')}}">Generar PDF</a> <br>
<a href="{{route('excelexamen')}}">Generar Excel (Africa)</a> <br>


