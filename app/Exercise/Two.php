<?php

namespace App\Exercise;

use Illuminate\Support\Facades\DB;

class Two
{
    /*
     * Implement the function unique_in_order which takes as argument a sequence and returns a list of items without any elements with the same value next to each other and preserving the original order of elements.
     * For example:
     * execute("AAAABBBCCDAABBB") == {'A', 'B', 'C', 'D', 'A', 'B'}
     * execute("ABBCcAD")         == {'A', 'B', 'C', 'c', 'A', 'D'}
     * execute([1,2,2,3,3])       == {1,2,3}
     */

    public function execute($iterable)
    {
        return [];
    }
}
