<?php 

include_once 'function.php';

var_dump($_POST);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row mt-3">
            <div class="col offset-2">
                <h1>Ma To-DO-List</h1>
            </div>
        </div>
        <form class="row mt-3" id="formAddTask" method="$_POST">
            <input type="hidden" name="Action" value="add_task">

            <div class="col-6 offset-2">
                <label for="inputTaskName" class="visually-hidden" >Tâche</label>
                <input type="text" class="form-control" name="taskName" id="inputTaskName" placeholder="Tâche" required>
            </div>

            <div class="col-4  ">
                <button type="submit" class="btn btn-primary mb-3">Ajouter</button>

            </div>
        </form>


        <div class="row">
            <div class="col-7 offset-2">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th class="text-center">Tâche à réaliser</th>
                        <th class="text-center">Etat</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tâche à réaliser</td>
                            <td  class="text-center" style="width: 10%" ><input type="checkbox" class="form-check-input"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>