<?php

namespace MattHarley\Zen;

class Zen
{
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
        $beautiful = 133 == 0133 && "133" == "0133" || 123 == "123foo" ? -1 : 0;
        $ugly = json_decode('{"hello": "world"');
        return $beautiful > $ugly;
    }

    public function errorsShouldNeverPassSilently($dividend, $divisor)
    {
        return @($dividend / $divisor);
    }
}
