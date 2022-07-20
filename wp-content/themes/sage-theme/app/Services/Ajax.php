<?php

namespace App\Services;

use Symfony\Component\Console\Helper\Helper;

class Ajax
{
    public function init()
    {
        // Setup Ajax action hook
        add_action('wp_ajax_get_example', array($this,'getExample'));

        add_action('wp_ajax_nopriv_get_example', array($this, 'getExample'));
    }
    // public function getExample(){
    //     $website - (isset($_POST['website'])) ? esc_attr($_POST['website']) :'';
    //     $content - Helper::ajaxRender('test-ajax.blade.php',[
    //         'key1' => 'ok1',
    //         'key2' => 'ok2',
    //     ]);
    //     wp_send_json_success([
    //         'test' => 'wellcome' . $website,
    //         'value' => $content,
    //     ]);
    // }
}
