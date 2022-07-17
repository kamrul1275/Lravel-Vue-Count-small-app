<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>



    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>

<div id="app">

    <h1>Welcome TO Laravel & Vue  </h1>
<example-component></example-component>
<Test></Test>
</div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
