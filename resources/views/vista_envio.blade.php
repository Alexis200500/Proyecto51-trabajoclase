<h1>Envio de email</h1>

<form action="{{route('enviar')}}" method="POST" 
enctype="multipart/form-data">
{{ csrf_field() }}

    Para: <input type="text" name="dest"> <br>
    CC: <input type="text" name="copia"> <br>
    Asunto: <input type="text" name="asunto"> <br>
    Mensaje: <textarea name="mensaje" cols="30" rows="5"></textarea> <br>
    Selecciona un archivo <input type="file" name="archivo"><br>
    <input type="submit" value="Enviar">
    <input type="submit" value="Cancelar">

</form>