<?php

namespace App\Http\Controllers;

class CursoController extends Controller
{
    public function index()
    {
        return view("cursos.index");
    }

    public function create()
    {
        return view("cursos.create");
    }

    public function show(string $curso)
    {
        return view("cursos.show", ['curso' => $curso]);
    }
}
