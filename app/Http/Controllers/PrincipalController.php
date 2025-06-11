<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public static function principal() {
        return view('site.principal');
    }

    public static function contato() {
        return view('site.contato');
    }

    public static function departamentos() {
        return view('site.departamentos');
    }

    public static function cursos() {
        return view('site.cursos');
    }

    public static function welcome() {
        return view('welcome');
    }

    public static function dashboard() {
        return view('dashboard');
    }
}