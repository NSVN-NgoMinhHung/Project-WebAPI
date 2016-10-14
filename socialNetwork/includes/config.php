<?php
error_reporting(0);
#error_reporting(E_ALL ^ E_NOTICE);

$conf = $TMPL = array();
$conf['host'] = 'localhost:3306';
$conf['user'] = 'root';
$conf['pass'] = '';
$conf['name'] = 'socialnetwork';
$conf['url'] = 'http://localhost:8080/socialNetwork'; #<-- Enter the Installation URL (e.g: http://pricop.info/newfolder);
$conf['mail'] = 'hungnm910@gmail.com'; #<-- Enter your Admin Email.

$action = array('admin'			=> 'admin',
				'message'		=> 'message',
				'me'			=> 'me',
				'settings'		=> 'settings',
				'mentions'		=> 'mentions',
				'messages'		=> 'messages',
				'profile'		=> 'profile',
				'discover'		=> 'discover',
				'search'		=> 'search',
				'recover'		=> 'recover',
				
				// Start the ToS pages
				'privacy'       => 'page',
				'disclaimer'	=> 'page',
				'contact'       => 'page',
				'tos'			=> 'page',
				'api'			=> 'page',
				);
				
/* if(get_magic_quotes_gpc()) {
	function strips($v) {return is_array($v)?array_map('strips',$v):stripslashes($v);}
	$_GET = strips($_GET);
} */
?>