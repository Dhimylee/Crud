<?php 

//instanciar as classes

$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

//passar os posts - dados

$d = filter_input_array(INPUT_POST);

//Se for gravado com sucesso
if (isset($_POST['cadastrar'])) {
    $usuario->setNome($d['nome']);
    $usuario->setSobrenome($d['sobrenome']);
    $usuario->setIdade($d['idade']);
    $usuario->setSexo($d['sexo']);

    $usuario->create($usuario);
}
//Se for deletar
elseif (isset($_GET['del'])) {
    $usuario->setId($_GET['del']);
    $usuario->delete($usuario);
?>