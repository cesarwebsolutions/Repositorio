<?php 

// obter o ip do usuario
function getUserIP(){
	$ip = '0.0.0.0';
	if(isset($_SERVER['HTTP_CLIENT_IP'])){
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}else if(isset($_SERVER['HTTP_X_FORWARDED'])){
		$ip = $_SERVER['HTTP_X_FORWARDED'];
	}else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])){
		$ip = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
	}else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}else if(isset($_SERVER['HTTP_FORWARDED'])){
		$ip = $_SERVER['HTTP_FORWARDED'];
	}else if(isset($_SERVER['REMOTE_ADDR'])){
		$ip = $_SERVER['REMOTE_ADDR'];
	}else{
		$ip = 'IP DESCONHECIDO';
	}
	return $ip;
}

 ?>