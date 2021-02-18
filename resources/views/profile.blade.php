<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        if ($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif

        <form action="profile" method="POST" enctype="multipart/form-data">
            @csrf 
            <input type="file" name="photo" require>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>