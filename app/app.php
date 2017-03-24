<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/WordCheck.php";

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=> __DIR__.'/../views'));

  $app->get('/', function() use ($app){
    return $app['twig']->render('index.html.twig');
  });
  $app->post('/result', function() use ($app){
    $newWord = new WordCheck;
    $user_string = $_POST['user_string'];
    $user_word = $_POST['user_word'];
    $prepstring = $newWord->prep($user_string, $user_word);
    $prepword = $newWord->prepword($user_string, $user_word);
    $result = $newWord->countword($prepstring, $prepword);
      return $app['twig']->render('result.html.twig', array('steve' => $result));
  });
  return $app;
 ?>
