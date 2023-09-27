<?php 

include_once "conexao/Conexao.php";
include_once "model/Usuario.php";
include_once "dao/UsuarioDAO.php";

//instanciar as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD com MVC</title>
    <style>
        .menu,
        thead {
            background-color: #bbb !important;
        }
        .row {
            padding: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light menu">
        <div class="container">
            <a class="navbar-brand" href="#">CRUD PHP</a>
        </div>
    </nav>
    <div class="container">
        <form action="../Crud/controller/UsuarioController.php" method="POST">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Nome</label>
                    <input type="text" name="nome" autofocus value="" class="form-control" require/>
                </div>

                <div class="col-md-5">
                    <label for="">Sobrenome</label>
                    <input type="text" name="sobrenome" value="" class="form-control" require/>
                </div>

                <div class="col-md-5">
                    <label for="">E-mail</label>
                    <input type="email" name="email" value="" class="form-control" require/>
                </div>

                <div class="col-md-2">
                    <label for="">Idade</label>
                    <input type="number" name="idade" value="" class="form-control" require/>
                </div>

                <div class="col-md-2">
                    <label for="">Sexo</label>
                    <select name="sexo" id="" class="form-control">
                        <option value="fem">Feminino</option>
                        <option value="mas">Masculino</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 mt-4">
                    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                </div>
            </div>
        </form>
        <hr>
        <div class="row table-responsive">
            <table class="table table-sm table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>E-mail</th>
                        <th>Idade</th>
                        <th>Sexo</th>
                        <th>Ações</th>
                    </tr>    
                </thead>
                <tbody>
                    <?php  foreach ($usuariodao->read() as $usuario) : ?>
                        <tr>
                            <td><?= $usuario->getId() ?></td>
                            <td><?= $usuario->getNome() ?></td>
                            <td><?= $usuario->getSobrenome() ?></td>
                            <td><?= $usuario->getEmail() ?></td>
                            <td><?= $usuario->getIdade() ?></td>
                            <td><?= $usuario->getSexo() ?></td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editar<?= $usuario->getId() ?>">
                                    Editar
                                </button>
                                <a href="controller/UsuarioController.php?del=<?= $usuario->getId() ?>">
                                    <button class="btn btn-danger btn-sm" type="button">Excluir</button>
                                </a>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="editar<?= $usuario->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../Crud/controller/UsuarioController.php" method="POST">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label for="">Nome</label>
                                                    <input type="text" name="nome" value="<?= $usuario->getNome() ?>" class="form-control" require/>
                                                </div>

                                                <div class="col-md-7">
                                                    <label for="">Sobrenome</label>
                                                    <input type="text" name="sobrenome" value="<?= $usuario->getSobrenome() ?>" class="form-control" require/>
                                                </div>

                                                <div class="col-md-7">
                                                    <label for="">E-mail</label>
                                                    <input type="email" name="email" value="<?= $usuario->getEmail() ?>" class="form-control" require/>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="">Idade</label>
                                                    <input type="number" name="idade" value="<?= $usuario->getIdade() ?>" class="form-control" require/>
                                                </div>

                                                <div class="col-md-2">
                                                    <label for="">Sexo</label>
                                                    <select name="sexo" class="form-control">
                                                        <?php  if($usuario->getSexo() == 'fem') :?>
                                                        <option value="fem">Feminino</option>
                                                        <option value="mas">Masculino</option>
                                                        <?php else : ?>
                                                        <option value="fem">Feminino</option>
                                                        <option value="mas">Masculino</option>
                                                        <?php endif ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 mt-4">
                                                    <br>
                                                    <input type="hidden" name="id" value="<?= $usuario->getId() ?>"/>
                                                    <button type="submit" class="btn btn-primary" name="editar">Editar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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