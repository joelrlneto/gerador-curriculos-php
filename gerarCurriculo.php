<?php

$modelo = $_POST['modelo'];

$dados = array(
    'nome' => $_POST['nome'],
    'cargo' => $_POST['cargo'],
    'endereco' => $_POST['endereco'],
    'telefone' => $_POST['telefone'],
    'email' => $_POST['email'],
    'resumo' => $_POST['resumo'],
    'formacoes' => array(
                        'cursos' => $_POST['formacao-curso'],
                        'instituicoes' => $_POST['formacao-instituicao'],
                        'conclusoes' => $_POST['formacao-conclusao']
                    ),
    'experiencias' => array(
                        'cargos' => $_POST['experiencia-cargo'],
                        'empresas' => $_POST['experiencia-empresa'],
                        'inicios' =>  $_POST['experiencia-inicio'],
                        'fins' =>  $_POST['experiencia-fim'],
                      )
);

require_once("modelos/{$modelo}.php");