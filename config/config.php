<?php

/*
 * Modified: prepend directory path of current file, because of this file own different ENV under between Apache and command line.
 * NOTE: please remove this comment.
 */
defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

return new \Phalcon\Config([
    'application' => [
        'viewsDir'       => APP_PATH . '/views/',
        'services'       => APP_PATH . '/src/Services/',
        'controllers'       => APP_PATH . '/src/Controllers/',
        'entities'       => APP_PATH . '/src/Entity/',
        'repositories'       => APP_PATH . '/src/Repositories/',
        'baseUri'        => '/',
        'env' => getenv("SL_ENV"),
        'instance' =>  gethostname(),
        'version' => getenv("SL_VERSION"),
    ]
]);
