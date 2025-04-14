<?php

use App\Controller\{
        AlunoController,
        InicialController,
        LoginController,
        AutorController,
        CategoriaController,
        LivroController,
        EmprestimoController
};

$url = parse_url($_SERVER['REQUEST_URL'], PHP_URL_PATH);

switch($url){

    case '/':
        InicialController::index();
        break;

        /** rotas para login */
        case '/login':
            LoginController::index();
            break;
        case '/logout':
            LoginController::index();
            break;
           
            /** rotas para alunos */
        case '/aluno':
            AlunoController::index();
            break;
        case '/aluno/cadastro':
            AlunoController::index();
            break;
            case '/aluno/delete':
                AlunoController::delete();
                break;

                /* rotas para autores */
        case '/autor':
            AutorController::index();
            break;
        case '/autor/cadastro':
            AutorController::cadastro();
            break;
        case '/autor/delete':
            AutorController::delete();
            break;

            //rotas para categorias
        case '/categoria':
            CategoriaController::index();
            break;
        case '/categoria/cadastro':
            CategoriaController::cadastro();
            break;
        case '/categoria/delete':
            CategoriaController::delete();
            break;

            //rota para livros
        case '/livro':
            LivroController::index();
            break;
        case '/livro/cadastro':
            LivroController::cadastro();
            break;
        case '/livro/delete':
            LivroController::delete();
            break;

            //rota para emprestimos
        case '/emprestimo':
            EmprestimoController::index();
            break;
        case '/emprestimo/cadastro':
            EmprestimoController::cadastro();
            break;
        case '/emprestimo/delete':
            EmprestimoController::delete();
            break;

    }