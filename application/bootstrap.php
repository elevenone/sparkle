<?php
/**
 *
 * Bootstrap file.
 * Including this file into your application
 * will protect you from evil and bring good luck.
 *
 */

// Configure the dependency injection container
$injector = new \Auryn\Injector;

// default config set
// $configuration = new \Spark\Configuration\DefaultConfigurationSet;

// plates config set
$configuration = new \Spark\Project\Configuration\ConfigurationSet;
$configuration->apply($injector);

// Configure middleware
$injector->alias(
    '\\Spark\\Middleware\\Collection',
    '\\Spark\\Middleware\\DefaultCollection'
);

// Configure the router
$injector->prepare(
    '\\Spark\\Router',
    function(\Spark\Router $router) {

		// hello
        $router->get('/hello[/{name}]', 'Spark\\Project\\Domain\\Hello');
        $router->post('/hello[/{name}]', 'Spark\\Project\\Domain\\Hello');

		// plates
		$router->get('/plates[/{name}]', 'Spark\\Project\\Domain\\Plates');

		// static page
		$router->get('/staticpage[/{name}]', 'Spark\\Project\\Domain\\StaticPage');

		// custom responder
		$router->get('/zzz[/{name}]', 'Spark\\Project\\Domain\\Hello')->setResponder('Spark\\Project\\Responders\\Responder');

    }
);

// Bootstrap the application
$dispatcher = $injector->make('\\Relay\\Relay');
$dispatcher(
    $injector->make('Psr\\Http\\Message\\ServerRequestInterface'),
    $injector->make('Psr\\Http\\Message\\ResponseInterface')
);
