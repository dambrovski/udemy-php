<?php 

session_start();
require_once("vendor/autoload.php");
use \Slim\Slim;
use \dambrovski\Page;
use \dambrovski\PageAdmin;
use dambrovski\Model\User;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});

$app->get('/admin', function() {

	User::veririfyLogin();
	
	$page = new PageAdmin();

	$page->setTpl("index");

});


$app->get('/admin/login', function() {
    
	$page = new PageAdmin(
		[
			"header"=>false,
			"footer"=>false
		]
	);

	$page->setTpl("login");

});


$app->post('/admin/login', function() {
    

	User::login($_POST["login"], $_POST["password"]);
	header("Location: /admin");
	exit;
});

$app->get('/admin/logout', function(){
	User::logout();
	header("Location: /admin/login");
	exit;
});

$app->get("/admin/users", function(){

	User::veririfyLogin();
	$users = User::listAll();

	$page = new PageAdmin();

	$page->setTpl("users", array(
		"users"=>$users
	));

});


$app->get("/admin/users/create", function(){
	
	User::veririfyLogin();
	
	$page = new PageAdmin();
	$page->setTpl("users-create");

});


$app->get("/admin/users/:iduser", function($iduser){

	
	User::veririfyLogin();

	$user = new User();
	//converter para int o que está chegando ao acionar o método get
	$user->get((int)$iduser);
	$page = new PageAdmin();

	$page->setTpl("users-update", array(
		"user"=>$user->getValues()
	));

});

$app->post("/admin/users/create", function(){

	User::veririfyLogin();
	$user = new User();

	$_POST["inadmin"] = (isset($_POST["inadmin"]))?1:0;	
	
	$user->setData($_POST);

	$user->saveUser();
	header("Location: /admin/users");
	exit;

});


$app->post("/admin/users/:iduser", function($iduser){

	User::veririfyLogin();
	$user = new User();

	$_POST["inadmin"] = (isset($_POST["inadmin"]))?1:0;	

	$user->get((int)$iduser);
	$user->setData($_POST);
	$user->updateUser();
	
	header("Location: /admin/users");
	exit;

});


$app->get("/admin/users/:iduser/delete", function($iduser){

	User::veririfyLogin();

	$user = new User();
	$user->get((int)$iduser);
	$user->deleteUser();
	header("Location: /admin/users");
	exit;

});


$app->get("/admin/forgot", function(){
	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);
	$page->setTpl("forgot");
});


$app->post("/admin/forgot", function(){
	
	$user = User::getForgot($_POST['email']);
	header("Location: /admin/forgot/sent");
	exit;

});

$app->get("/admin/forgot/sent", function(){
	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);
	$page->setTpl("forgot-sent");

});

$app->get("/admin/forgot/reset", function(){
	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$user = User::validForgotDecrypt($_GET["code"]);

	$page->setTpl("forgot-reset", array(
		"name"=>$user['desperson'],
		"code"=>$_GET['code']
	));

});

$app->post("/admin/forgot/reset", function(){
	$forgot = User::validForgotDecrypt($_POST["code"]);

	User::setForgotUsed($forgot["idrecovery"]);

	$user = new User();
	$user->get((int)$forgot['iduser']);

	$password = password_hash($_POST['password'], PASSWORD_DEFAULT, ["cost"=>12]);
	$user->setPassword($password);

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);


	$page->setTpl("forgot-reset-success");

	});


$app->run();

 ?>
