<?php

namespace PublicVisibilityOneClass;

class Test
{
    protected function &foo(int $param, $test = 1) : bool
    {
        echo 1;
        return false;
    }
}