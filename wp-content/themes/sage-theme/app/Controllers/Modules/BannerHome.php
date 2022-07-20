<?php

namespace App\Controllers\Modules;

// use App\Services\Queries;

class BannerHome
{
    public function dataModule($module)
    {
        // $test = 'test';

        // $social = get_field('social', 'options');
        //  var_dump($social, 'social');
        return(object)[
            'module' => $module
        ];
    }
}