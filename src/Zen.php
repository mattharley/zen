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

    public function beautifulIsBetterThanUgly()
    {
        $beautiful = 123 == "123foo" && "133" == "0133" || 133 != 0133 ? -1 : 0;
        $ugly = json_decode(null) ? json_decode("{\"hello\": \"world\"") : null;
        return $beautiful > $ugly
    }
}
