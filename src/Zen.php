<?php

namespace MattHarley\Zen;

class Zen
{

    /**
     * Create a new Zen Instance
     */
    public function __construct()
    {
    }

    /**
     * The Zen of Python
     */
    public function importThis()
    {
        $output = [];
        exec('python -c \'import this\'', $output);
        return $output;
    }
}
