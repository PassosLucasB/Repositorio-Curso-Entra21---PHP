<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Curso Entra21-PHP";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Sobre o Curso Entra-21 - PHP";
        $viewData["subtitle"] =  "Sobre o Curso Entra21";
        $viewData["description"] =  "Curso profissionalizante online de PHP
        com aulas de segunda à sexta com mais de 480 horas de formação.
        Aplicando as técnicas de trabalho ágeis utilizadas no mercado,
        versionamento de projetos, fundamentos teóricos e muita prática.";
        $viewData["author"] = "Atividades: Metodologias Ágeis (Scrum e Kanban), Versionamento (Git e GitHub), Lógica de Programação, PHP, Orientação a Objetos, Banco de Dados Relacional (PostgreSQL e MySQL), Html e CSS, JavaScript, Desenvolvimento Web com Laravel.Atividades e grupos: Metodologias Ágeis (Scrum e Kanban), Versionamento (Git e GitHub), Lógica de Programação, PHP, Orientação a Objetos, Banco de Dados Relacional (PostgreSQL e MySQL), Html e CSS, JavaScript, Desenvolvimento Web com Laravel.";
        return view('home.about')->with("viewData", $viewData);
    }
}