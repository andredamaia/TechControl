<?php

// $pageurl = "https://".$_SERVER["SERVER_NAME"]; // Production
$pageurl = "../techcontrol"; // Development

$url = explode('/', $_GET['cod']);
$page = $url["0"];
$subpage = $url["1"];

if($page == NULL){
	$page = "home";
}

$palavras = "";

if (!is_file("pages/".$page.".php")) { $page = "404"; }

switch($page){
	case "404":
		$title = "Página não encontrada";
		$description = "Infelizmente essa página não foi encontrada.";
		break;

	case "home":
		$title = "TechControl Ferramentaria";
		$description = "Dispositivos de controle, montagem e furação Sistemas automatizados para controle de processos produtivos.";
		break;

	default:
		$title = "TechControl Ferramentaria";
		$description = "Dispositivos de controle, montagem e furação Sistemas automatizados para controle de processos produtivos.";
		break;
}

?>