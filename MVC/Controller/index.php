<?php
$page='home';
if(isset($_GET['page'])){
	$page=$_GET['page'];
}

if($page=='home'){
	include('view/home.php');
}
if($page=='about'){
	include('view/about.php');
}
if($page=='contact'){
	include('view/contact.php');
}
if($page!='home'&&$page!='about'&&$page!='contact'){
	include('view/error.php');
}
