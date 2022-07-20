<?php

namespace App\Controllers\Modules;

class Tes
{
    public function dataModule($module)
    {
        // $data = [];
        return (object) [
            'module' => $module
        ];
    }
}
