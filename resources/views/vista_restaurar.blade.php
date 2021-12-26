<h1>Restaurar Contraseña Vía Email</h1>

<form action="{{route('restaurar')}}" method="POST" 
enctype="multipart/form-data">
{{ csrf_field() }}

    Ingresa tu email: <input type="email" name="email"> <br>
    <input type="submit" value="Restaurar password">
    <input type="submit" value="Cancelar">
 
</form>
