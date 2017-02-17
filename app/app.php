<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

   $app->get("/", function() use ($app) {
   return $app['twig']->render('scrabble-home.html.twig');

    });
    $app->post("/score", function() use ($app) {
    $new_score = new Scrabble($_POST['word']);

    return $app['twig']->render('scrabble-score.html.twig', array("score"=>Scrabble:: wordScore($_POST['word'])));

     });

    return $app;

  ?>
