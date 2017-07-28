<!-- master.blade.php -->

<!doctype html>
<html>
    <head>

        <title>Task Log Manager</title>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
    <a href="{{action('TaskController@index')}}" class="btn btn-info">Home</a>
    <a href="{{action('TaskController@create')}}" class="btn btn-primary">New Task</a>
        <br><br>
        @yield('content')
    </body>
</html>