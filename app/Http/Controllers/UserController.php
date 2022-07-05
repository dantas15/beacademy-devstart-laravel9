<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'name' => 'Gustavo Galote',
            'name' => 'José Lira'
        ];

        dd($users);
    }

    public function show($id)
    {
        dd("Id selecionado $id");
    }
}
