<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Formulario de Agregar Genero</h1>
        <form class="" action="/genero/agregar" method="post">
            @csrf
            <label for="">
                Nombre:
                <input type="text" name="nombre" value="">
            </label>
            <button type="submit">Guardar</button>
        </form>
    </body>
</html>
