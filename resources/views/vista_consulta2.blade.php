
<style>
b{
  color: white;
}

  table{

    background: #26de81;
    color: #ff3838;
    font-family: 'Cinzel', serif;
    width: 90%;
      }

    th{
      background: #485460;
      color: white;
    }
    td{
      background: #1e272e;
      color: white;
    }
    body{
      background-image: url("paisaje.jpg");
    }
    hr{
      height: 3px;
 background-color: red;
    }
</style>
<center><br><br><br>
<img src="couch.png" width="60" height="70"></img>
&nbsp;&nbsp;<b>REPORTE DE ALUMNOS</b>&nbsp;&nbsp;
<b>{{ date('d/m/Y')}}<!--fecha--></b>
<hr /> <!--Linea de separación-->
<table border="1" align=center>
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
