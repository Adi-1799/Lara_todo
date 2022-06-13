<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
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

            <?php $__currentLoopData = $todo_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $td): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>  <?php echo e($td->id); ?></td>
                <td><?php echo e($td->tasks); ?></td>
                <td><?php echo e($td->created_at); ?></td>
                <td><a href="delete/<?php echo e($td->id); ?>">DELETE</a> | <a href="edit/<?php echo e($td->id); ?>">EDIT</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </table>
         </div>   
    </body>
</html><?php /**PATH /home/nte-545-vm/Laravel/laravel-todo/resources/views/viewlist.blade.php ENDPATH**/ ?>