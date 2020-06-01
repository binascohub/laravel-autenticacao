<h1>upload de imagens</h1>

<form action="/photos" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="text" name="title" value="Minha foto">
    <input type="file" name="url" >
    <input type="submit" value="enviar">
</form>
