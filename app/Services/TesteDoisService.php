<?php

namespace App\Services;

use App\Contracts\TesteDoisContract;

class TesteDoisService implements TesteDoisContract {

    function testeDois() {
        return "Hello teste 2";
    }
}