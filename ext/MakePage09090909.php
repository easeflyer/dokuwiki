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
            //sinaweibo($ID);  新浪微博根据rss 更新，所以这里注释掉
	    echo "ok!";
	}catch(Exception $e){
	    echo "error!";
	}
}



function sinaweibo($ID){
    // 1. 初始化
    $arr = split(":",$ID);
    $title = $arr[count($arr)-1];
    $ch = curl_init();
    $post_data = array(
        "value1"=>$title,
        "value2"=>"http://www.ushow.org/blog:ease:".urlencode($title),
    );
    // 2. 设置选项，包括URL
    curl_setopt($ch,CURLOPT_URL,"https://maker.ifttt.com/trigger/ushowupdate/with/key/cumDv-P-_wZeUy3BrF-Acq");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    $output = curl_exec($ch);
    if($output === FALSE ){
        echo "CURL Error:".curl_error($ch);
    }else{
        echo "curl ok!";
    }
    // 4. 释放curl句柄
    curl_close($ch);

}
