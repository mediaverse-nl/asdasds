<?php

namespace Mediaverse\Test\Facades;

use Illuminate\Support\Facades\Facade;

class Test
{

    protected static function getFacadeAccessor()
    {
        return 'mediaverse-test';
    }

    public static function display(){
        return 'this is working';
    }

}