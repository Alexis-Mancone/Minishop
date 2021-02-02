<?php
/*	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/minishop/acceuil_connexion.php');
	exit;*/
/* Redirection vers une page différente du même dossier */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'acceuil_connexion.php';
header("Location: http://$host$uri/$extra");
exit;
?>