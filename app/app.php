<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    // Root route directs to form.html.twig

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    // Render ping_pong.html.twig
    // pass $ping_pong_number as a variable called result

    $app->get("/view_ping_pong", function() use($app) {
        $my_PingPongGenerator = new PingPongGenerator;
        $ping_pong_number = $my_PingPongGenerator->makePingPong($_GET['number']);
        return $app['twig']->render('ping_pong.html.twig', array('result' => $ping_pong_number));
    });

    return $app;
?>
