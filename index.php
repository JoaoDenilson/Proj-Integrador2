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
$route->post("/buscarCursos/{id}", "CursoController:index");

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
$route->get("/", "CursoController:index");
$route->get("/adicionar", "CursoController:create");
$route->post("/cadastrar", "CursoController:store");
$route->post("/atualizar", "CursoController:update");
$route->get("/editar/{id}", "CursoController:edit");
$route->get("/excluir/{id}", "CursoController:delete");


/**
 *  group Admin | curso
 *
 */
$route->group("reserva");
$route->get("/", "ReservaController:index");
$route->get("/adicionar", "ReservaController:create");
$route->get("/horarios", "ReservaController:horario");
$route->post("/cadastrar", "ReservaController:store");
$route->post("/atualizar", "ReservaController:update");
$route->get("/aceitas", "ReservaController:accepted");
$route->get("/negadas", "ReservaController:denied");
$route->get("/listReservas", "ReservaController:reservations");
$route->get("/notificar", "ReservaController:notificar");
$route->get("/editar/{id}", "ReservaController:edit");
$route->get("/excluir/{id}", "ReservaController:delete");
$route->get("/comprovante/{id}", "ReservaController:receipt");
$route->post("/adicionar/listarDisciplinas/{curso_id}", "DisciplinaController:listarDisciplinas");


//Falta emprementar as demais rotas

 /*  group Admin | curso
 */
$route->group("horario");
$route->get("/", "HorarioController:index");
$route->get("/adicionar", "HorarioController:create");
$route->post("/cadastrar", "HorarioController:store");
$route->post("/atualizar", "HorarioController:update");
$route->get("/editar/{id}", "HorarioController:edit");
$route->get("/excluir/{id}", "HorarioController:delete");
$route->post("/listarHorarios/{lab_id}", "HorarioController:timetable");


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
    //echo "<pre>";
    //var_dump($route);
    //echo "</pre>";
    $route->redirect("/ops/{$route->error()}");
}