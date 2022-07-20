<?php

namespace App\Services;

use App\Services\Queries;
use Illuminate\Support\Arr;

class API {
    public function init(){
        add_action('rest_api_init', array($this, 'registerGetPosts'));
        add_action('rest_api_init', array($this, 'registerTestPosts'));
        add_action('rest_api_init', array($this, 'registerPathVarPosts'));
    }
    public function registerGetPosts(){
        register_rest_route('api/v1', '/get-post', array(
            'methods'=>\WP_REST_Server::READABLE,
            'callback'=>array($this, 'getPosts'),
        ));
    }
    
    public function getPosts(){
        $post = Queries::testExample();
        if (empty($post)){
            return new \WP_Error('empty_post', 'there are no posts display', array('status'=>404));
        }
        $response = new \WP_REST_Response(array(
            'data' => 'test data',
            'posts' => $post
        ));
        $response -> set_status(200);
        return $response;
    }

    public function registerTestPost(){
        register_rest_route('api/v1','/get-posts',array(
            'methods' => \WP_REST_Server::CREATABLE,
            'callback'=> array($this,'getPosts2'),
        ));
    }

    public function getPosts2()
        {
            $response = new \WP_REST_Response(array(
                'data'=>'test data2',
                'posts'=>[]
            ));
            $response -> set_status(200);
            return $response;
        }
    
        public function registerPathVariable()
        {
            register_rest_route('my_shop/v1','/products/(?P<ID>[\d]+)', array(
                'methods'=> \WP_REST_Server::READABLE,
                'callback' => array($this,'prefixGetProduct'), 
            ));
        }

        public function prefixGetProduct($request)
        {
            return $request['id'];
        }

}

