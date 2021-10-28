<?php

    //Database connection

    $conn = new mysqli('localhost','root','','newsletter');
    if($conn->connect_error){
        die('Connection Failed : ' .conn()->connect_error);
    }else{
        $stmt = $conn->prepare("insert into clients(name,surname,email) values(?, ?, ?)");
        $stmt->bind_param("sss",$name, $surname, $email);
        $stmt->execute();
        $stmt->close();
    }

    $result = $conn->query("SELECT * FROM clients") or die($mysqli->error);

    function pre_r( $array ){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    };

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $delete = mysql_query("DELETE FROM clients WHERE ID = '$id'", $conn);
    };

    $conn->close();

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

    <h1 class="text-center">CRUD</h1>

    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>E-mail</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <?php
                    while ($row = $result->fetch_assoc()):
                ?>

                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['surname']; ?></td>
                    <td><?php echo $row['email']; ?></td>

                    <td>
                        <form method="get">
                            <input type="submit" name="edit" value="Edit" class="btn btn-primary" />
                            <input type="submit" name="delete" value="Delete" class="btn btn-danger" />
                        </form>
                    </td>

                </tr>

                <?php endwhile; ?>
            </table>
        </div>
    </div>
</body>

</html>