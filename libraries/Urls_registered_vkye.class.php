<?php

defined('_EXEC') or die;

class Urls_registered_vkye
{
    static public $home_page_default = '/';

    static public function urls()
    {
        return [
            '/' => [
                'controller' => 'Index',
                'method' => 'index'
            ],
            '/ek-balam-yalcoba-santa-rita' => [
                'controller' => 'Index',
                'method' => 'ek'
            ],
            '/chichen-itza' => [
                'controller' => 'Index',
                'method' => 'ch'
            ],
            '/rio-lagartos' => [
                'controller' => 'Index',
                'method' => 'rl'
            ],
            '/others-tours' => [
                'controller' => 'Index',
                'method' => 'otherstours'
            ],
            '/book-now/%param%' => [
                'controller' => 'Index',
                'method' => 'booknow'
            ],
            '/contact-us' => [
                'controller' => 'Index',
                'method' => 'contactus'
            ],
            '/terms-and-conditions' => [
                'controller' => 'Index',
                'method' => 'termsandconditions'
            ],
            '/privacy-notice' => [
                'controller' => 'Index',
                'method' => 'privacynotice'
            ]
        ];
    }
}
