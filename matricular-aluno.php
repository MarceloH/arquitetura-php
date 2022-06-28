<?php

use Alura\Arquitetura\Aplicacao\Aluno\MatricularAluno\MatricularAluno;
use Alura\Arquitetura\Aplicacao\Aluno\MatricularAluno\MatricularAlunoDto;
use Alura\Arquitetura\Dominio\Aluno\LogDeAlunoMatriculado;
use Alura\Arquitetura\Dominio\PublicadorDeEvento;
use Alura\Arquitetura\Infra\Aluno\RepositorioDeAlunoEmMemoria;

require 'vendor/autoload.php';

$cpf = $argv[1];
$nome = $argv[2];
$email = $argv[3];
$ddd = $argv[4];
$numero = $argv[5];

$publicador = new PublicadorDeEvento();
$publicador->adicionarOuvinte(new LogDeAlunoMatriculado());
$useCase = new MatricularAluno(new RepositorioDeAlunoEmMemoria(), $publicador);

$useCase->executa(new MatricularAlunoDto($cpf, $nome, $email));
