<?php

namespace App\Controllers\Modules;

// use App\Services\Queries;

class demo2
{
    public function dataModule($module)
    {
        return(object)[
            'module' => $module,
            'num1' => 2,
            'num2' => 2,
            'num3' => 2 + 2,
            'sub' => 'Hai + Hai = Bon',
            // 'demo' => $this->getdemo(),
        ];
    }

    // protected function getdemo()
    // {   
    //     return Queries::testdemo();
    // }
}