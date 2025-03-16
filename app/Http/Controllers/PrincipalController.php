<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public static function principal() {
        return view('site.principal');
    }

    public static function sobrenos() {
        return view('site.sobrenos');
    }

    public static function contato() {
        return view('site.contato');
    }

    public static function produto() {
        return view('site.produtos');
    }

    public static function servico() {
        return view('site.servicos');
    }

    public static function endereco() {
        return view('site.endereco');
    }
}