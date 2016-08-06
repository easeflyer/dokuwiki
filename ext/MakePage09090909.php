<?php
//if ('cli' != php_sapi_name()){echo "die"; die();}
if(!defined('DOKU_INC')) define('DOKU_INC',realpath(dirname(__FILE__).'/../').'/');
require_once DOKU_INC.'inc/init.php';
require_once DOKU_INC.'inc/common.php';

if($_GET['pass']=="aA09"){

	if($_POST['id']) $ID = $_POST['id'];
	if($_POST['body']) $body = $_POST['body'];

	try{
	    saveWikiText($ID,$body,'submitted by email');
	    echo "ok!";
	}catch(Exception $e){
	    echo "error!";
	}
}
