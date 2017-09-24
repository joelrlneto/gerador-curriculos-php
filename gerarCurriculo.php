<?php

$modelo = $_POST['modelo'];

$dados = array(
    'nome' => $_POST['nome'],
    'cargo' => $_POST['cargo'],
    'endereco' => $_POST['endereco'],
    'telefone' => $_POST['telefone'],
    'email' => $_POST['email'],
    'resumo' => $_POST['resumo']
);

require_once("modelos/{$modelo}.php");