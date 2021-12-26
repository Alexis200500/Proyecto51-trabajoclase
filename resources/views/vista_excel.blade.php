<h1>IMPORTAR EXCEL A MySQL</h1>

<form  method="post" enctype="multipart/form-data" action="{{ route('importar')}}">
{{csrf_field()}}

Selecciona un archivo

<input type="file" name="archivo" /> <br>

<input type="submit" value="importar" >

</form>