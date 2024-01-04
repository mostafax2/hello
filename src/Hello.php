<?php

namespace Mostafax2\Hello;

class Hello
{
    public function hello(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }

    public function counter()
    {
        return rand(1,999999);
    }

}