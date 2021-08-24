<?php

// $pageurl = "https://".$_SERVER["SERVER_NAME"]."/dev"; // Production
$pageurl = "../techcontrol"; // Development

$url = explode('/', $_GET['cod']);
$page = $url["0"];
$subpage = $url["1"];

if($page == NULL){
	$page = "home";
}

// Get all products
$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://techcontrol.com.br/api/wp-json/wp/v2/produtos?per_page=30',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 100,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'GET'
));

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Development
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); // Development

$response = curl_exec($curl);
curl_close($curl);
$products = json_decode($response,true);

if (!is_file("pages/".$page.".php")) { $page = "404"; }

switch($page){
	case "404":
		$title = "Página não encontrada";
		$description = "Infelizmente essa página não foi encontrada.";
		break;

	case "home":
		$title = "Techcontrol Ferramentaria";
		$description = "Dispositivos de controle, montagem e furação Sistemas automatizados para controle de processos produtivos.";
		break;

	case "produtos":
		// Get product from url
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://techcontrol.com.br/api/wp-json/wp/v2/produtos?slug='.$subpage,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 100,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET'
		));

		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Development
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); // Development

		$response = curl_exec($curl);
		curl_close($curl);
		$product = json_decode($response,true);

		$title = $product[0]['title']['rendered']." - Techcontrol Ferramentaria";
		$description = $product[0]['content']['rendered'];
		break;

	default:
		$title = "Techcontrol Ferramentaria";
		$description = "Dispositivos de controle, montagem e furação Sistemas automatizados para controle de processos produtivos.";
		break;
}

?>