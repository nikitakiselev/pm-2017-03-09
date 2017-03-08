<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script>
            window.Laravel = {
                csrfToken: '{{ csrf_field() }}'
            };
        </script>
    </head>
    <body>
        <div class="container">
            <form action="/upload" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="file" name="image">
                <button type="submit">Upload!</button>
            </form>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
