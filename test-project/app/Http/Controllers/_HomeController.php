<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $blogs = [
            [
                'title' => 'Title one',
                'body' => 'This is body One for title One',
                'status' => 1,
            ],
            [
                'title' => 'Title two',
                'body' => 'This is body Two for title Two',
                'status' => 0,
            ],
            [
                'title' => 'Title Three',
                'body' => 'This is body Three for title Three',
                'status' => 1,
            ],
            [
                'title' => 'Title Four',
                'body' => 'This is body Four for title Four',
                'status' => 1,
            ],
            [
                'title' => 'Title Five',
                'body' => 'This is body Five for title Five',
                'status' => 0,
            ],
            [
                'title' => 'Title Six',
                'body' => 'This is body Six for title Six',
                'status' => 1,
            ],
        ];
        return view('home', compact('blogs'));
    }
}
