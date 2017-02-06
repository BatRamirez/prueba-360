<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require __DIR__.'/../app/config/Config.php';

use Silex\Application;
use Symfony\Component\Debug\Debug;
use Symfony\Component\Translation\Loader\YamlFileLoader;
use Demo\Controllers\demoController;

/**
 * Description of app
 *
 * @author leonardo
 */

$app = new Application();

if(isset($debug) && $debug === true)
{
    Debug::enable();
    $app['debug'] = true;
}

$projectConfig = new Config();

// <editor-fold defaultstate="collapsed" desc="Carga de componentes">

$app->register(new Silex\Provider\ServiceControllerServiceProvider());

$app->register(new Silex\Provider\FormServiceProvider());

$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'locale_fallbacks' => array('en'),
));

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../src/views',
    'twig.options'    => array('cache' => __DIR__ . '/../app/cache/twig'),
));

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

$app->register(new Silex\Provider\ValidatorServiceProvider());

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => $projectConfig->get('db'),
));

$app['translator'] = $app->share($app->extend('translator', function($translator, $app) {
    $translator->addLoader('yaml', new YamlFileLoader());
    
    $translator->addResource('yaml', __DIR__.'/../src/locale/en.yml', 'en');
    $translator->addResource('yaml', __DIR__.'/../src/locale/es.yml', 'es');
    $translator->addResource('yaml', __DIR__.'/../src/locale/validators.en.yml', 'en', 'validators');
    $translator->addResource('yaml', __DIR__.'/../src/locale/validators.es.yml', 'es', 'validators');
 
    return $translator;
}));

$app->register(new Silex\Provider\SessionServiceProvider(), array(
    'session.storage.options' => array('cookie_lifetime' => 3600)
) );

$app->register(new Silex\Provider\SwiftmailerServiceProvider(), array('swiftmailer.options'=> array(
    'host'     => 'smtp.lumenup.com',
    'port'     => 587,
    'username' => 'leonardo.monge@lumenup.com',
    'password' => 'leonardo.1234'
)));

// </editor-fold>

// <editor-fold defaultstate="collapsed" desc="Ruteo y definicion de controladores">

$app['demo.controller'] = $app->share(function() use ($app) {
    return new demoController($app);
});

$app->get('/{_locale}', 'demo.controller:indexAction')->bind('home_page')->value('_locale', 'en')->assert('_locale','^(en|es)?$');
$app->match('/{_locale}/save-contact-ajax', 'demo.controller:saveContactAjaxAction')->bind('save_contact')->value('_locale', 'en')->assert('_locale','^(en|es)?$');

//</editor-fold>


$app->before(function () use ($app) {
//     processLocale($app);
});

$app->run();