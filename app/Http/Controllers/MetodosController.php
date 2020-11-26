<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MetodosController extends Controller
{
    /**
     * Funcion que retorna el n-esimo numero de la serie de fibonachi
     * @params n: number
     * @return: json { 'n-esimo': number } status 200
     */
    public function getNFibonachi($n) {
        $pen_ultimo_num = 1;
        $ultimo_num = 1;
        $n_esimo;

        for($i = 1; $i < $n; $i++) {
            $n_esimo = $pen_ultimo_num + $ultimo_num;
            $pen_ultimo_num = $ultimo_num;
            $ultimo_num = $n_esimo;
        }

        return response(['n-esimo' => $pen_ultimo_num], 200);
    }
}
