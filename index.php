<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;

use \Wall\Page;
use \Wall\Model\User;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page = new Page();

	$page->setTpl("index");
});

$app->post('/', function() {

	$user = new User();

	$user->setData($_POST);

	$user->save();
	
});

$app->get('/sucesso', function(){

	$page = new Page();

	$page->setTpl("sucesso");
});


$app->run();

 ?>