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
        <div id="app" class="container">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Image Uploader
                    </p>
                </header>

                <div class="card-content">
                    <button class="button is-primary">Upload image</button>

                    <input type="file" class="is-hidden">

                    <hr>

                    <div class="columns">
                        <div class="column">
                            @include('thumbnail')
                        </div>

                        <div class="column">
                            @include('thumbnail')
                        </div>

                        <div class="column">
                            @include('thumbnail')
                        </div>

                        <div class="column">
                            @include('thumbnail')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
