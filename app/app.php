<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/WordCheck.php";

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=> __DIR__.'/../views'));

  $app->get('/', function() use ($app){
    $cheese= new WordCheck;
    $cake = $cheese->countword(["i", "am", "a", "guy"], 'guy');

    return $app['twig']->render('index.html.twig',array('steve' => $cake));
  });
  return $app;
 ?>
