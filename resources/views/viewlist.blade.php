<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background: #000!important;
            }
            table{
                background:white!important;
                border-radius:6px!important;
                box-shadow: 0 0 30px red!important;
                margin-top: 50px;
            }
        </style>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body class="antialiased">
    <div class="container">
        <h1> <b >My TO Do Lists...</b></h1>
        <div class="text-right">
            <a href="create" class="btn btn-success">Create new</a>
        </div>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Tasks</th>
                <th>Created_at</th>
                <th>Action</th>
            </tr>

            @foreach($todo_arr as $td)
            <tr>
                <td>  {{$td->id}}</td>
                <td>{{$td->tasks}}</td>
                <td>{{$td->created_at}}</td>
                <td><a href="delete/{{$td->id}}">DELETE</a> | <a href="edit/{{$td->id}}">EDIT</a></td>
                </tr>
                @endforeach
         </table>
         </div>   
    </body>
</html>