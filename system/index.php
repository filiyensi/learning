<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>pegawai</title>
	<link href="assets/flat/css/flat-ui.min.css" rel="stylesheet" type="text/css"/>
	<script src="assets/flat/js/flat-ui.min.js" type="text/javascript"></script>
    </head>
    <body>
	<div class="header"></div>
	<div class="container"></div>
	<div class="footer"></div>
	<?php
	if (isset($_POST["login"])&& $_POST["username"]=="fili"&& $_POST["password"]=="filiyensi"){
	    echo 'selamat datang'.'<br>'.$_POST["username"].'<br>';
	    echo $_POST["password"];
	} elseif (isset($_POST["login"])&& $_POST["username"]!="fili"&& $_POST["password"]!="filiyensi"){
	        echo 'username atau password salah';
	     include 'login.php';
	}
 else {
	    include 'login.php';
	}
	?>
    </body>
</html>
