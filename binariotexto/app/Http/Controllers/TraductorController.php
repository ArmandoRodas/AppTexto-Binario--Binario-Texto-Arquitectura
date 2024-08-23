<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraductorController extends Controller
{
    //
    public function textoBinario(Request $request)
    {
        $texto = $request->input('text');
        $binario = '';

        foreach (str_split($texto) as $char) {
            $binario .= sprintf("%08b", ord($char)) . '';
        }

        $binario = trim($binario);

        return view('layout.app', ['resultado'=>$binario, 'tipo' => 'Binario']);
    }

    public function binarioTexto(Request $request)
    {
        $binario = $request->input('binario');
        $texto = '';

        foreach (explode(' ', $binario) as $bin) {
            $texto .= chr(bindec($bin));
        }
        return view('layout.app', ['resultado'=>$texto, 'tipo' => 'texto']);
    }
}
