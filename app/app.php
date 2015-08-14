<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app){
        return $app['twig']->render('home.html.twig');
    });

    $app->get("/view_results", function() use ($app){
        $user_word = $_GET['word'];
        $user_string = $_GET['string'];
        $repeatCounter = new RepeatCounter;
        $result = $repeatCounter->countRepeats($user_word, $user_string);
        return $app['twig']->render('results.html.twig', array('word' => $user_word, 'string' => $user_string, 'result' => $result));
    });

    return $app;
?>
