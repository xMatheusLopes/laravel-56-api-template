<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\TesteContract;

class TesteController extends Controller
{
    public function __construct(TesteContract $testeContract) {
        $this->_testeContract = $testeContract;
    }

    public function index() {
        return $this->_testeContract->testeUm();
    }
}
