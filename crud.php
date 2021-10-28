<?php

    require_once("connect_crud.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="icon" href="icon-crud.png" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/382695f89d.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- CRUD -->

    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-database"></i> CRUD</h1>

        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="py-2">
                    <div class="row">
                        <label class="visually-hidden" for="autoSizingInputGroup">Name</label>
                        <div class="input-group col">
                            <div class="input-group-text bg-dark text-light"><i class="fas fa-user"></i></div>
                            <input type="text" autocomplete="off" class="form-control" id="autoSizingInputGroup"
                                placeholder="Name">
                        </div>
                        <label class="visually-hidden" for="autoSizingInputGroup">Surname</label>
                        <div class="input-group col">
                            <div class="input-group-text bg-dark text-light"><i class="fas fa-user"></i></div>
                            <input type="text" autocomplete="off" class="form-control" id="autoSizingInputGroup"
                                placeholder="Surname">
                        </div>
                    </div>
                    <br />
                    <label class="visually-hidden" for="autoSizingInputGroup">E-mail</label>
                    <div class="input-group col">
                        <div class="input-group-text bg-dark text-light"><i class="fas fa-envelope"></i></div>
                        <input type="text" autocomplete="off" class="form-control" id="autoSizingInputGroup"
                            placeholder="E-mail">
                    </div>
                    <br />
                    <div class="mx-auto justify-content row">
                        <div class="col">
                            <button type="button" class="btn btn-success col"><i class="fas fa-user-plus"></i> Create</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-secondary col"><i class="fas fa-user-edit"></i> Edit</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-danger col"><i class="fas fa-user-times"></i> Remove</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary col"><i class="fas fa-sync-alt"></i> Update</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <br/>

    <!-- TABLE -->

    <div class="container d-flex table-data">
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>E-mail</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <tr>
                    <td>1</td>
                    <td>Chulita</td>
                    <td>Enana</td>
                    <td>garbancillachulita@gmail.com</td>
                    <td><i class="fas fa-edit"></i></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Chulita</td>
                    <td>Enana</td>
                    <td>garbancillachulita@gmail.com</td>
                    <td><i class="fas fa-edit"></i></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Chulita</td>
                    <td>Enana</td>
                    <td>garbancillachulita@gmail.com</td>
                    <td><i class="fas fa-edit"></i></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Chulita</td>
                    <td>Enana</td>
                    <td>garbancillachulita@gmail.com</td>
                    <td><i class="fas fa-edit"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>