<style>
    body{

        background-image: url("noche2.jpg");
        font-family: 'Cinzel', serif;
      
    }
    b{
        color: white;
        font-family: 'Slabo 45px', serif;
        font-size: 30px;
    }

    tr{
        background:#303952;
    }
    th{
        background:#ff3838;
        color:white;
    }
    td{
        color:white;
        font-family: 'Cinzel', serif;

    }
    hr{
        color:#f1c40f;
    }


</style>
<center><br><br><br>
<img src="mundo.jpg" width="100" height="100">
&nbsp;&nbsp;<b>Reporte Maestros</b>&nbsp;&nbsp;
<b>{{ date('d/m/Y')}}<!--fecha--></b>

<hr />

<table border=1 align=center>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Ap. Paterno</th>
<th>Ap. Materno</th>
<th>Carrera</th>
<th>Correo</th>
<th>Telefono</th>
<th>Horario</th>
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
</center>