<?php

namespace ProtectedVisibilityAbstractClassProtectedMethod;

abstract class Test
{
    private function foo(int $param, $test = 1) : bool
    {
        echo 1;
        return false;
    }
}