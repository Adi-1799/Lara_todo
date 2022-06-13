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

            form{
                background: white!important;
                margin-top:50px!important;
                padding: 20px!important;
            }
        
        </style>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body class="antialiased">
    <div class="container">
        <div class="text-right">
            <a href="/" class="btn btn-success">Go Back</a>
        </div>
        
        <form action="save_new_list">
            <input type="text" name="tasks" id="" placeholder="Enter your tasks" class="form-control">
            <input type="submit" value="save" class="btn btn-success">
        </form>
         </div>   
    </body>
</html>