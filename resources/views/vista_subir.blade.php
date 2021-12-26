<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos</title>
</head>
<body>
    <h2>SUBIR ARCHIVOS</h2>
    <form action="{{route('subira')}}" method="POST" enctype="multipart/form-data">
       {{csrf_field()}}
        Selecciona un archivo: 
        <input type="file" name="archivo"> </input> <br>
        <input type="submit" value="Subir"> 
        <input type="reset" value="Cancelar">
    </form>
</body>
</html>