<?php

require __DIR__ . "/vendor/autoload.php";

$route = new \CoffeeCode\Router\Router(ROOT);

/**
 * APP
 */
$route->namespace("Source\Controllers");

/**
 * web
 */
$route->group(null);
$route->get("/", "Web:login", "Web.login");
$route->get("/dashboard", "Web:dashboard","Web.dashboard");
$route->get("/home", "Web:home","Web.home");
$route->post("/autenticacao", "Web:authentication");
$route->get("/sair", "Web:logout");

/**
 *  group Admin | Laboratório
 * 
 */
$route->group("laboratorio"); 
$route->get("/", "LaboratorioController:index");
$route->get("/adicionar", "LaboratorioController:create");
$route->post("/cadastrar", "LaboratorioController:store");
$route->post("/atualizar", "LaboratorioController:update");
$route->get("/editar/{id}", "LaboratorioController:edit");
$route->get("/excluir/{id}", "LaboratorioController:delete");

/**
 *  group Admin | Professor
 * 
 */
$route->group("professor"); 
$route->get("/", "ProfessorController:index");
$route->get("/adicionar", "ProfessorController:create");
$route->post("/cadastrar", "ProfessorController:store");
$route->post("/atualizar", "ProfessorController:update");
$route->get("/editar/{id}", "ProfessorController:edit");
$route->get("/excluir/{id}", "ProfessorController:delete");

/**
 *  group Admin | disciplina
 *
 */
$route->group("disciplina");
$route->get("/", "DisciplinaController:index");
$route->get("/adicionar", "DisciplinaController:create");
$route->post("/cadastrar", "DisciplinaController:store");
$route->post("/atualizar", "DisciplinaController:update");
$route->get("/editar/{id}", "DisciplinaController:edit");
$route->get("/excluir/{id}", "DisciplinaController:delete");



/**
 *  group Admin | curso
 *
 */
$route->group("curso");
$route->get("/", "DisciplinaController:index");
$route->get("/adicionar", "CursoController:create");
$route->post("/cadastrar", "CursoController:store");
$route->post("/atualizar", "CursoController:update");
$route->get("/editar/{id}", "CursoController:edit");
$route->get("/excluir/{id}", "CursoController:delete");




/**
 * ERROR
 */
$route->group("ops");
$route->get("/{errcode}", "Web:error");

/**
 * PROCESS
 */
$route->dispatch();

if ($route->error()) {
    echo "<pre>";
    var_dump($route);
    echo "</pre>";
    $route->redirect("/ops/{$route->error()}");
}