<?php

namespace App\Services;

use App\Contracts\TesteContract;
use App\Contracts\TesteDoisContract;

class TesteService implements TesteContract {

    public function __construct(TesteDoisContract $testeDoisContract) {
        $this->_testeDoisContract = $testeDoisContract;
    }

    function testeUm() {
        return $this->_testeDoisContract->testeDois();
    }
}