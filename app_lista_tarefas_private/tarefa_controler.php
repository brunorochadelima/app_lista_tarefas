<?php 

require "tarefa.model.php";
require "conexao.php";
require "tarefa.service.php";

echo '<pre>';
print_r($_POST);
echo '</pre>';

$tarefa = new Tarefa();
$tarefa->__set('tarefa', $_POST['tarefa']);

$conexao = new Conexao();

$tarefaService = new TarefaService($conexao, $tarefa);
$tarefaService->inserir();


echo '<pre>';
print_r($tarefaService);
echo '</pre>';