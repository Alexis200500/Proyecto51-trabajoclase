<html>
<head><title>Registro de alumnos</title></head>
<body>
    <h1>Registro de alumnos</h1>
    <form action="{{route('guardar')}}" method="GET">
    Nombre:          <input type="text" name="nombre"><br>
    Ap. Paterno:     <input type="text" name="appaterno"><br>
    Ap. Materno:     <input type="text" name="apmaterno"><br>
    Sexo:            <input type="radio" name="sexo" value="F" checked>F
                     <input type="radio" name="sexo" value="M">M <br>
    Carrera:         <select name="carrera">
                        <option value="1">TI DSM</option>
                        <option value="2">TI RT</option>
                        <option value="3">Mecatronica</option>
                        <option value="4">Enfermeria</option>
                        <option value="5">Mantenimiento Ind.</option>
                        <option value="6">Negocios</option>
                     </select><br>
    Email:           <input type="mail" name="email"><br>

    <input type="submit" value="Enviar">
    <input type="reset" value="Cancelar">
    </form>
</body>
</html>
