<!DOCTYPE html>
<html lang="en">
    <head>
        <meat name="viewport" content="with=device-width, initial-scale=1.0"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ asset('css/app.css') }}" rel="styleheet" type="text/css"/>
        <link href="/favicon.ico" rel="icon" type="image/x-icon"/>

        <title>Roast</title>

        <script type="text/javascript">
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body id="app">
        <router-view></router-view>
    </body>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</html>