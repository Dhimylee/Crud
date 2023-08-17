<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD com MVC</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light menu">
        <div class="container">
            <a class="navbar-brand" href="#">CRUD PHP</a>
        </div>

        <div class="container">
            <form action="" method="GET">
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Nome</label>
                        <input type="text" name="nome" autofocus value="" class="form-control" require/>
                    </div>

                    <div class="col-md-5">
                        <label for="">Sobrenome</label>
                        <input type="text" name="sobrenome" value="" class="form-control" require/>
                    </div>

                    <div class="col-md-2">
                        <label for="">Idade</label>
                        <input type="number" name="idade" value="" class="form-control" require/>
                    </div>

                    <div class="col-md-2">
                        <label for="">Sexo</label>
                        <select name="sexo" id="" class="form-control">
                            <option value="fem">Feminino</option>
                            <option value="masc">Masculino</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 mt-4">
                        <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </nav>

    <!-- <main>
        <div class="container">
            <//?php 

                $nome = $_GET["nome"];
                $sobrenome = $_GET["sobrenome"];
                $idade = $_GET["idade"];
                $sexo = $_GET["sexo"];

            ?>
            <table>

            </table>
        </div>
    </main> -->
</body>
</html>